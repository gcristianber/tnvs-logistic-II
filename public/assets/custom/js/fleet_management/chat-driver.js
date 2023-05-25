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
    setDoc,
    addDoc
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


// Get all the buttons with class "popupButton"
const chatBox = $("#messages");
const chatRef = collection(db, "driver-chat"); // Variable to store the current driver ID
let unsubscribe = null; // Variable to store the unsubscribe function

// Function to fetch and display chat messages for a specific chat_id
const fetchChatMessages = (chatId) => {
    // Create a query to retrieve chat messages for the given chat_id
    const querySnapshot = query(
        chatRef,
        where("chat_id", "==", chatId),
        orderBy("timestamp")
    );

    // Subscribe to the query snapshot to listen for real-time updates
    unsubscribe = onSnapshot(querySnapshot, (snapshot) => {
        chatBox.empty(); // Clear previous chat messages

        snapshot.forEach((doc) => {
            const chatData = doc.data();
            const chatMessage = chatData.message;
            const chatTimestamp = chatData.timestamp.toDate();
            const timeString = chatTimestamp.toLocaleTimeString([], {
                hour: "2-digit",
                minute: "2-digit",
                hour12: true,
            });
            const sender = chatData.is_manager;
            const isMe = sender === 1;
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
        });

        // Scroll to the bottom of the chat box
        chatBox.scrollTop(chatBox[0].scrollHeight);
    }, (error) => {
        console.log(`Encountered error: ${error}`);
    });
};

$("#chatForm").keypress(function (event) {
    if (event.which == 13) {
        event.preventDefault(); // prevent default form submit behavior
        $('#sendMessage').click(); // trigger click event on send button
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
        chat_id: chatId,
        is_manager: 1,
        is_driver: 0,
        message: chatForm,
        timestamp: new Date(),
    });
});

var scrollbarExample = new PerfectScrollbar('.perfect-scrollbar-example');
var popupButtons = document.querySelectorAll('.popupButton');

popupButtons.forEach(function (button) {
    button.addEventListener('click', function (event) {
        // Retrieve the chat_id from the clicked button
        chatId = event.target.getAttribute('data-driver-id');

        // Display the chat_id in the pop-up card
        document.getElementById('popupCard').style.display = 'block';
        document.getElementById('driverId').innerText = chatId;
        // Fetch and display all chat messages for the selected chat_id
        fetchChatMessages(chatId);
    });
});

document.getElementById('closeButton').addEventListener('click', function () {
    document.getElementById('popupCard').style.display = 'none';

    // Unsubscribe from the chat messages
    if (unsubscribe) {
        unsubscribe();
    }
});
