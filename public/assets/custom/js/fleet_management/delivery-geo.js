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

// Your web app's Firebase configuration
const firebaseConfig = {
    apiKey: "AIzaSyCdE861SnlahEpGMerK9TrJAwAMUMfoRWs",
    authDomain: "lulan-geo.firebaseapp.com",
    projectId: "lulan-geo",
    storageBucket: "lulan-geo.appspot.com",
    messagingSenderId: "362524656961",
    appId: "1:362524656961:web:592cc21b9a735594510dc0"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);

// Get a reference to the Firestore database
const db = getFirestore(app);

const urlParams = new URLSearchParams(window.location.search);
const deliveryParam = urlParams.get('tracking_id');
// Get a reference to the "geo" collection in the database
const geoRef = collection(db, "deliveries");

// !TARGET THE ID TO FIREBASE
const customGeoDocRef = doc(geoRef, deliveryParam);

// !MAPBOX INITIALIZATION
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
// Create a default Marker and add it to the map.
let currentMarker = null;

// !LISTENS EVERY CHANGES AND CHANGE THE MARKER's LOCATION
onSnapshot(customGeoDocRef, (doc) => {
    if (doc.exists()) {

        var latitude = doc.data().lat;
        var longitude = doc.data().lng;

        console.log(`Latitude: ${latitude}`)
        console.log(`Longitude: ${longitude}`)

        console.log("Document has been updated!")
        console.log("Document has been get!")

        if (currentMarker) {
            currentMarker.remove();
        }

        var img_url = config.baseUrl + 'assets/images/aerial-view-truck.png';

        var el = document.createElement('div');
        el.className = 'marker';
        el.style.backgroundImage = 'url(' + img_url + ')';
        el.style.backgroundPosition = 'center';
        el.style.backgroundRepeat = 'no-repeat';
        el.style.width = '50px';
        el.style.height = '50px';

        currentMarker = new mapboxgl.Marker({
            element: el
        })
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

getDoc(customGeoDocRef).then((doc) => {
    if (doc.exists()) {
        console.log("Document data:", doc.data().routes);
        const coordinates = doc.data().routes.map(coord => [coord.lng, coord.lat]);
        map.on('load', function () {

            const directionsRequest = 'https://api.mapbox.com/directions/v5/mapbox/driving/' + coordinates.join(';') + '?geometries=geojson&access_token=' + mapboxgl.accessToken;

            fetch(directionsRequest)
                .then(response => response.json())
                .then(data => {
                    const route = data.routes[0].geometry;

                    map.addLayer({
                        'id': 'route',
                        'type': 'line',
                        'source': {
                            'type': 'geojson',
                            'data': {
                                'type': 'Feature',
                                'geometry': route
                            }
                        },
                        'paint': {
                            'line-color': '#6571ff',
                            'line-width': 7
                        }
                    });

                    // Add start marker
                    const startMarker = new mapboxgl.Marker({ color: '#ff3366' })
                        .setLngLat(coordinates[0])
                        .setPopup(new mapboxgl.Popup().setHTML("<b>A</b>"))
                        .addTo(map);

                    // Add end marker
                    const endMarker = new mapboxgl.Marker({ color: '#05a34a' })
                        .setLngLat(coordinates[coordinates.length - 1])
                        .setPopup(new mapboxgl.Popup().setHTML("<b>B</b>"))
                        .addTo(map);
                });
        });
    } else {
        // doc.data() will be undefined in this case
        console.log("No such document!");
    }
}).catch((error) => {
    console.log("Error getting document:", error);
});

// * UPDATE THE DOCUMENT
// Call watchPosition to continuously track changes in the user's position
const watchId = navigator.geolocation.watchPosition(
    (position) => {
        // Update the document in Firebase with the new position data
        updateDoc(customGeoDocRef, {
            lat: position.coords.latitude,
            lng: position.coords.longitude,
        })
            .then(() => {
                console.log(position)

                console.log("Document successfully updated!");
            })
            .catch((error) => {
                console.error("Error updating document: ", error);
            });
    },
    (error) => {
        console.error("Error getting geolocation: ", error);
    }
);
