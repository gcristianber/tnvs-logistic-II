import {
    initializeApp
} from "https://www.gstatic.com/firebasejs/9.17.2/firebase-app.js";
import {
    getFirestore,
    collection,
    addDoc,
    setDoc,
    getDoc,
    doc,
    onSnapshot,
    updateDoc,
    query,
    where,
    orderBy,
    getDocs
} from "https://www.gstatic.com/firebasejs/9.17.2/firebase-firestore.js";

//* Your web app's Firebase configuration
const firebaseConfig = {
    apiKey: "AIzaSyCdE861SnlahEpGMerK9TrJAwAMUMfoRWs",
    authDomain: "lulan-geo.firebaseapp.com",
    projectId: "lulan-geo",
    storageBucket: "lulan-geo.appspot.com",
    messagingSenderId: "362524656961",
    appId: "1:362524656961:web:592cc21b9a735594510dc0"
};

//* Initialize Firebase
const app = initializeApp(firebaseConfig);

//* Get a reference to the Firestore database
const db = getFirestore(app);

//* Get a reference to the "geo" collection in the database
const geoRef = collection(db, "geo");
const chatRef = collection(db, "driver-chat");

// !TARGET THE ID TO FIREBASE
const customGeoDocRef = doc(geoRef, "delivery-001");

// TODO: IF THE ID DOESN'T EXIST THEN INSERT A NEW ID

//* Mapbox Initialization
mapboxgl.accessToken = 'pk.eyJ1IjoibWVsb24tZGV2IiwiYSI6ImNsYTRrMnYwMjA0NnM0MHJ2a3R4ZjU5aHgifQ.EGko1-iUxIzdjVqKzp8ZmA';
const map = new mapboxgl.Map({
    container: 'map', // container ID
    style: 'mapbox://styles/melon-dev/clhitoc5v01dx01r03l23cxyn', // style URL
    zoom: 17, // starting zoom
});

// Use the Geolocation API to get the user's current position
navigator.geolocation.getCurrentPosition(position => {
    // Update the center of the map with the user's current position
    map.setCenter([position.coords.longitude, position.coords.latitude]);
  });

//* Create a default Marker and add it to the map.
let currentMarker = null;

//* Listens every changes and change the marker's location.
onSnapshot(customGeoDocRef, (doc) => {
    if (doc.exists()) {

        var latitude = doc.data().latitude;
        var longitude = doc.data().longitude;

        console.log(`Latitude: ${latitude}`)
        console.log(`Longitude: ${longitude}`)

        console.log("Document has been updated!")
        console.log("Document has been get!")

        if (currentMarker) {
            currentMarker.remove();
        }

        currentMarker = new mapboxgl.Marker()
            .setLngLat([longitude, latitude])
            .addTo(map);

        map.flyTo({
            center: [longitude, latitude],
            essential: true // this animation is considered essential with respect to prefers-reduced-motion
        });


    } else {
        console.log("No such document!");
    }
}, (error) => {
    console.log("Error getting document:", error);
});



const querySnapshot = query(chatRef, orderBy("timestamp"));
// const querySnapshot = query(chatRef, where("recipient", "==", "001"), orderBy("timestamp"));

const chatBox = $("#messages");
onSnapshot(querySnapshot, (snapshot) => {
    snapshot.docChanges().forEach((change) => {
        if (change.type === "added") {
            // console.log(`New message: ${change.doc.data().message}`); 
            const chatTimestamp = change.doc.data().timestamp
            const date = chatTimestamp.toDate();
            const timeString = date.toLocaleTimeString([], {
                hour: '2-digit',
                minute: '2-digit',
                hour12: true
            });
            const chatMessage = change.doc.data().message
            const chatMessageHTML = `
      <div class="d-flex justify-content-end align-items-center mb-3" data-chat="me">
        <small class="text-muted">${timeString}</small>
        <div class="bg-primary d-inline-flex p-3 rounded-2 bg-opacity-10 ms-2">
          ${chatMessage}
        </div>
      </div>
    `;

            chatBox.append(chatMessageHTML);

            const messagesElement = document.getElementById('messages');
            messagesElement.scrollTop = messagesElement.scrollHeight - messagesElement.clientHeight;
        }
    });
}, (error) => {
    console.log(`Encountered error: ${error}`);
});

$("#sendMessage").on("click", function () {
    var recipient = "001"
    var chatForm = $("#chatForm").val()

    $("#chatForm").val("")

    // Add chatForm value to the firebase
    addDoc(chatRef, {
        recipient: recipient,
        message: chatForm,
        timestamp: new Date()
    })
})
