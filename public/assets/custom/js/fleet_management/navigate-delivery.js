import { initializeApp } from "https://www.gstatic.com/firebasejs/9.17.2/firebase-app.js";
import {
  getFirestore,
  collection,
  doc,
  onSnapshot,
  updateDoc,
  query,
  where,
  orderBy,
  getDoc,
  setDoc,
  addDoc,
} from "https://www.gstatic.com/firebasejs/9.17.2/firebase-firestore.js";

const firebaseConfig = {
  apiKey: "AIzaSyCdE861SnlahEpGMerK9TrJAwAMUMfoRWs",
  authDomain: "lulan-geo.firebaseapp.com",
  projectId: "lulan-geo",
  storageBucket: "lulan-geo.appspot.com",
  messagingSenderId: "362524656961",
  appId: "1:362524656961:web:592cc21b9a735594510dc0",
};

const app = initializeApp(firebaseConfig);
const db = getFirestore(app);

const geoRef = collection(db, "deliveries");

// First, get a reference to the document you want to update
const urlParams = new URLSearchParams(window.location.search);
const deliveryParam = urlParams.get("tracking_id");

console.log(deliveryParam);

mapboxgl.accessToken =
  "pk.eyJ1IjoibWVsb24tZGV2IiwiYSI6ImNsYTRrMnYwMjA0NnM0MHJ2a3R4ZjU5aHgifQ.EGko1-iUxIzdjVqKzp8ZmA";
const map = new mapboxgl.Map({
  container: "map",
  // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
  style: "mapbox://styles/melon-dev/clhitoc5v01dx01r03l23cxyn",
  // center: [  121.0689706, 14.669254],
  zoom: 14,
});

const geoDocRef = doc(geoRef, deliveryParam);

// * ROUTES
getDoc(geoDocRef)
  .then((doc) => {
    if (doc.exists()) {
      console.log("Document data:", doc.data().routes);
      const coordinates = doc
        .data()
        .routes.map((coord) => [coord.lng, coord.lat]);
      map.on("load", function () {
        const directionsRequest =
          "https://api.mapbox.com/directions/v5/mapbox/driving/" +
          coordinates.join(";") +
          "?geometries=geojson&access_token=" +
          mapboxgl.accessToken;

        fetch(directionsRequest)
          .then((response) => response.json())
          .then((data) => {
            const route = data.routes[0].geometry;

            map.addLayer({
              id: "route",
              type: "line",
              source: {
                type: "geojson",
                data: {
                  type: "Feature",
                  geometry: route,
                },
              },
              paint: {
                "line-color": "#6571ff",
                "line-width": 7,
              },
            });

            // Add start marker
            const startMarker = new mapboxgl.Marker({ color: "#ff3366" })
              .setLngLat(coordinates[0])
              .setPopup(new mapboxgl.Popup().setHTML("<b>A</b>"))
              .addTo(map);

            // Add end marker
            const endMarker = new mapboxgl.Marker({ color: "#05a34a" })
              .setLngLat(coordinates[coordinates.length - 1])
              .setPopup(new mapboxgl.Popup().setHTML("<b>B</b>"))
              .addTo(map);
          });
      });
    } else {
      // doc.data() will be undefined in this case
      console.log("No such document!");
    }
  })
  .catch((error) => {
    console.log("Error getting document:", error);
  });

let currentMarker = null;

// !LISTENS EVERY CHANGES AND CHANGE THE MARKER's LOCATION
onSnapshot(
  geoDocRef,
  (doc) => {
    if (doc.exists()) {
      var latitude = doc.data().lat;
      var longitude = doc.data().lng;

      console.log(`Latitude: ${latitude}`);
      console.log(`Longitude: ${longitude}`);

      console.log("Snapshot!!");

      if (currentMarker) {
        currentMarker.remove();
      }

      var img_url = config.baseUrl + "assets/images/aerial-view-truck.png";

      var el = document.createElement("div");
      el.className = "marker";
      el.style.backgroundImage = "url(" + img_url + ")";
      el.style.backgroundPosition = "center";
      el.style.backgroundRepeat = "no-repeat";
      el.style.width = "50px";
      el.style.height = "50px";

      currentMarker = new mapboxgl.Marker({
        element: el,
      })
        .setLngLat([longitude, latitude])
        .addTo(map);

      map.flyTo({
        center: [longitude, latitude],
        essential: true, // this animation is considered essential with respect to prefers-reduced-motion
      });
    } else {
      console.log("No such document!");
    }
  },
  (error) => {
    console.log("Error getting document:", error);
  }
);

const chatBox = $("#messages");
const chatRef = collection(db, "driver-chat");
const querySnapshot = query(
  chatRef,
  where("tracking_id", "==", deliveryParam),
  orderBy("timestamp")
);

onSnapshot(
  querySnapshot,
  (snapshot) => {
    snapshot.docChanges().forEach((change) => {
      if (change.type === "added") {
        const chatData = change.doc.data();
        const chatMessage = chatData.message;
        const chatTimestamp = chatData.timestamp.toDate();
        const timeString = chatTimestamp.toLocaleTimeString([], {
          hour: "2-digit",
          minute: "2-digit",
          hour12: true,
        });
        const sender = chatData.sender;
        const isMe = sender === "Fleet Manager";
        const chatMessageClass = isMe
          ? "d-flex justify-content-end align-items-center mb-3"
          : "d-flex justify-content-start align-items-center mb-3";
        const chatBubbleClass = isMe
          ? "bg-primary d-inline-flex p-3 rounded-2 bg-opacity-10 ms-2"
          : "bg-light d-inline-flex p-3 rounded-2 bg-opacity-10 me-2";
        const chatMessageHTML = `
        <div class="${chatMessageClass}" data-chat="${sender}">
          <small class="text-muted">${timeString}</small>
          <div class="${chatBubbleClass}">
            ${chatMessage}
          </div>
        </div>
      `;
        chatBox.append(chatMessageHTML);

        const messagesElement = document.getElementById("messages");
        messagesElement.scrollTop =
          messagesElement.scrollHeight - messagesElement.clientHeight;
      }
    });
  },
  (error) => {
    console.log(`Encountered error: ${error}`);
  }
);

$("#chatForm").keypress(function (event) {
  if (event.which == 13) {
    event.preventDefault(); // prevent default form submit behavior
    $("#sendMessage").click(); // trigger click event on send button
  }
});

$("#sendMessage").on("click", function (e) {
  const chatForm = $("#chatForm").val().trim();
  if (!chatForm) {
    return;
  }
  $("#chatForm").val("");
  // Add chatForm value to the firebase
  addDoc(chatRef, {
    tracking_id: deliveryParam,
    sender: "Fleet Manager",
    message: chatForm,
    timestamp: new Date(),
  });
});
