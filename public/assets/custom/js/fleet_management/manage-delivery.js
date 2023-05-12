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

mapboxgl.accessToken = 'pk.eyJ1IjoibWVsb24tZGV2IiwiYSI6ImNsYTRrMnYwMjA0NnM0MHJ2a3R4ZjU5aHgifQ.EGko1-iUxIzdjVqKzp8ZmA';
const map = new mapboxgl.Map({
  container: 'map',
  // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
  style: 'mapbox://styles/melon-dev/clhitoc5v01dx01r03l23cxyn',
  zoom: 13
});

// Use the Geolocation API to get the user's current position
navigator.geolocation.getCurrentPosition(position => {
  // Update the center of the map with the user's current position
  map.setCenter([position.coords.longitude, position.coords.latitude]);
});



const mapboxDirections = new MapboxDirections({
  accessToken: mapboxgl.accessToken,
  
});
map.addControl(mapboxDirections, 'top-left');

const app = initializeApp(firebaseConfig);
const db = getFirestore(app);
// const deliveryColRef = collection(db, "deliveries");

// get references to the input fields and table
const productIdInput = document.querySelector('#product-id');
const productNameInput = document.querySelector('#product-name');
const quantityInput = document.querySelector('#quantity');
const table = document.querySelector('#delivery_products tbody');

const data = []

// attach event listener to "Add Data" button
const addButton = document.querySelector('#add-data');
addButton.addEventListener('click', function () {
  // retrieve input values
  const productId = productIdInput.value;
  const productName = productNameInput.value;
  const quantity = quantityInput.value;

  // create new table row
  const newRow = document.createElement('tr');
  newRow.setAttribute('class', 'align-middle');
  newRow.innerHTML = `
    <tr class='align-middle'>
    <td>${table.rows.length + 1}</td>
    <td>${productId}</td>
    <td>${productName}</td>
    <td>${quantity}</td>
    <td>
      <button class="btn btn-danger btn-icon removeItem">
        <i data-feather="minus-circle"></i>
      </button>
    </td>
  `;

  // attach event listener to "Remove" button
  const removeButton = newRow.querySelector('.removeItem');
  removeButton.addEventListener('click', function () {
    // remove current row from table
    table.removeChild(newRow);
    // remove corresponding item from data array
    const index = data.findIndex(item => item.productId === productId && item.productName === productName && item.quantity === quantity);
    if (index !== -1) {
      data.splice(index, 1);
    }
    console.log(data)
  });

  data.push({
    product_id: productId,
    product_name: productName,
    quantity: quantity
  });

  console.log(data)

  // append new row to table
  table.appendChild(newRow);

  // clear input fields
  productIdInput.value = '';
  productNameInput.value = '';
  quantityInput.value = '';
  feather.replace()
});

var deliveryForm = document.getElementById("deliveryForm")
deliveryForm.addEventListener("submit", event => {
  event.preventDefault()
  var form = event.target
  var formData = new FormData(form)

  Swal.fire({
    title: "Are you sure?",
    text: "You are about to cancel your request!",
    icon: "info",
    showCancelButton: true,
    confirmButtonClass: "me-2",
    confirmButtonText: "Yes, Submit it!",
    cancelButtonText: "No, cancel!",
    reverseButtons: true,
  }).then((result) => {
    if (result.value) {
      insert_new_delivery(formData, routes, data)
      console.log(formData)
    }
  })
})

const routes = [];
mapboxDirections.on('route', function (event) {
  const start = event.route[0].legs[0].steps[0].maneuver.location;
  const end = event.route[0].legs[0].steps[event.route[0].legs[0].steps.length - 1].maneuver.location;
  // Iterate over all of the steps in the route
  for (const leg of event.route[0].legs) {
    for (const step of leg.steps) {
      // Extract the `maneuver.location` property for each step
      const maneuverLocation = step.maneuver.location;
      routes.push({
        lng: maneuverLocation[0],
        lat: maneuverLocation[1]
      });

      console.log(routes)
    }
  }
});

function insert_new_delivery(form, routes, items) {
  $.ajax({
    url: config.baseUrl + 'fleet_management_admin/delivery_requests/insert_new_delivery',
    type: 'POST',
    processData: false,
    contentType: false,
    data: form,
    success: function (response) {
      var tracking_id = JSON.parse(response)
      const deliveryDocRef = doc(db, "deliveries", tracking_id);
      setDoc(deliveryDocRef, {
        lng: 0,
        lat: 0,
        routes: routes
      }).then(function () {
        console.log("Document written successfully!");
        // Get the document data after storing
        getDoc(deliveryDocRef).then((doc) => {
          console.log("Document data:", doc.data());
        }).catch((error) => {
          console.log("Error getting document:", error);
        });
      }).catch(function (error) {
        console.error("Error writing document: ", error);
      });

      $.ajax({
        url: config.baseUrl + 'fleet_management_admin/delivery_requests/insert_line_items',
        type: 'POST',
        data: {
          tracking_id: tracking_id, 
          line_items: items 
        },
        success: function (response) {
          console.log(response)
        }
      })


    }
  })
}

function insert_line_items(items) {

}

