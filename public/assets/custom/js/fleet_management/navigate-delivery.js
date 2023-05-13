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

mapboxgl.accessToken = 'pk.eyJ1IjoibWVsb24tZGV2IiwiYSI6ImNsYTRrMnYwMjA0NnM0MHJ2a3R4ZjU5aHgifQ.EGko1-iUxIzdjVqKzp8ZmA';
const map = new mapboxgl.Map({
    container: 'map',
    // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
    style: 'mapbox://styles/melon-dev/clhitoc5v01dx01r03l23cxyn',
    // center: [  121.0689706, 14.669254],
    zoom: 14
});

const geoDocRef = doc(geoRef, deliveryParam);

// * ROUTES
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


let currentMarker = null;

// !LISTENS EVERY CHANGES AND CHANGE THE MARKER's LOCATION
onSnapshot(geoDocRef, (doc) => {
    if (doc.exists()) {

        var latitude = doc.data().lat;
        var longitude = doc.data().lng;

        console.log(`Latitude: ${latitude}`)
        console.log(`Longitude: ${longitude}`)

        console.log("Snapshot!!")

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










