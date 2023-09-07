import { initializeApp } from "https://www.gstatic.com/firebasejs/9.17.2/firebase-app.js";
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
  getDocs,
} from "https://www.gstatic.com/firebasejs/9.17.2/firebase-firestore.js";

//* Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyCdE861SnlahEpGMerK9TrJAwAMUMfoRWs",
  authDomain: "lulan-geo.firebaseapp.com",
  projectId: "lulan-geo",
  storageBucket: "lulan-geo.appspot.com",
  messagingSenderId: "362524656961",
  appId: "1:362524656961:web:592cc21b9a735594510dc0",
};

//* Initialize Firebase
const app = initializeApp(firebaseConfig);

//* Get a reference to the Firestore database
const db = getFirestore(app);

//* Get a reference to the "geo" collection in the database
const geoRef = collection(db, "deliveries");

mapboxgl.accessToken =
  "pk.eyJ1IjoibWVsb24tZGV2IiwiYSI6ImNsYTRrMnYwMjA0NnM0MHJ2a3R4ZjU5aHgifQ.EGko1-iUxIzdjVqKzp8ZmA";
const map = new mapboxgl.Map({
  container: "map", // container ID
  style: "mapbox://styles/melon-dev/clhitoc5v01dx01r03l23cxyn", // style URL
  zoom: 17, // starting zoom
});

let currentMarker = null;

function addMarkerToMap(latitude, longitude, trackingId) {
  const marker = new mapboxgl.Marker()
    .setLngLat([longitude, latitude])
    .setPopup(new mapboxgl.Popup().setHTML(`<h3>${trackingId}</h3>`))
    .addTo(map);

  return marker;
}

function updateMarkerPosition(marker, latitude, longitude) {
  marker.setLngLat([longitude, latitude]);
}

function retrieveDocumentsAndAddMarkers() {
  getDocs(geoRef)
    .then((querySnapshot) => {
      querySnapshot.forEach((doc) => {
        const data = doc.data();
        const latitude = data.lat;
        const longitude = data.lng;
        const trackingId = doc.id;

        const marker = addMarkerToMap(latitude, longitude, trackingId);

        if (trackingId === "YOUR_CURRENT_TRACKING_ID") {
          currentMarker = marker;
        }
      });
    })
    .catch((error) => {
      console.log("Error retrieving documents:", error);
    });
}

function listenForChanges() {
  onSnapshot(geoRef, (snapshot) => {
    snapshot.docChanges().forEach((change) => {
      const data = change.doc.data();
      const latitude = data.lat;
      const longitude = data.lng;
      const trackingId = change.doc.id;
      console.log("Snapshot");

      if (change.type === "added") {
        const marker = addMarkerToMap(latitude, longitude, trackingId);

        if (trackingId === "YOUR_CURRENT_TRACKING_ID") {
          currentMarker = marker;
        }
      } else if (change.type === "modified") {
        if (trackingId === "YOUR_CURRENT_TRACKING_ID") {
          updateMarkerPosition(currentMarker, latitude, longitude);
        }
      } else if (change.type === "removed") {
        // Handle marker removal if needed
      }
    });
  });
}

navigator.geolocation.getCurrentPosition((position) => {
  const { latitude, longitude } = position.coords;

  map.flyTo({ center: [longitude, latitude], zoom: 17 });

  retrieveDocumentsAndAddMarkers();
  listenForChanges();
});
