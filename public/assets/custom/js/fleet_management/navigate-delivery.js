import {
    initializeApp
} from "https://www.gstatic.com/firebasejs/9.17.2/firebase-app.js";
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
    setDoc
} from "https://www.gstatic.com/firebasejs/9.17.2/firebase-firestore.js";

const firebaseConfig = {
    apiKey: "AIzaSyCdE861SnlahEpGMerK9TrJAwAMUMfoRWs",
    authDomain: "lulan-geo.firebaseapp.com",
    projectId: "lulan-geo",
    storageBucket: "lulan-geo.appspot.com",
    messagingSenderId: "362524656961",
    appId: "1:362524656961:web:592cc21b9a735594510dc0"
};

const app = initializeApp(firebaseConfig);
const db = getFirestore(app);

const geoRef = collection(db, "deliveries");

// First, get a reference to the document you want to update
const urlParams = new URLSearchParams(window.location.search);
const deliveryParam = urlParams.get('tracking_id');

console.log(deliveryParam)

const docRef = doc(geoRef, deliveryParam); // replace "document_id" with the actual ID of the document you want to update

// * UPDATE THE DOCUMENT
// Call watchPosition to continuously track changes in the user's position
const watchId = navigator.geolocation.watchPosition(
    (position) => {
        // Update the document in Firebase with the new position data
        updateDoc(docRef, {
            latitude: position.coords.latitude,
            longitude: position.coords.longitude,
        })
            .then(() => {
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

mapboxgl.accessToken = 'pk.eyJ1IjoibWVsb24tZGV2IiwiYSI6ImNsYTRrMnYwMjA0NnM0MHJ2a3R4ZjU5aHgifQ.EGko1-iUxIzdjVqKzp8ZmA';
const map = new mapboxgl.Map({
    container: 'map',
    // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
    style: 'mapbox://styles/melon-dev/clhitoc5v01dx01r03l23cxyn',
    zoom: 14
});

// Use the Geolocation API to get the user's current position
navigator.geolocation.getCurrentPosition(position => {
    // Update the center of the map with the user's current position
    map.setCenter([position.coords.longitude, position.coords.latitude]);
});

const geoDocRef = doc(geoRef, deliveryParam);

getDoc(geoDocRef).then((doc) => {
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








