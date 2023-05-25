<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>NobleUI - HTML Bootstrap 5 Admin Dashboard Template</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/core/core.css">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="<?= ROOT ?>assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= ROOT ?>assets/css/demo1/style.css">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="<?= ROOT ?>assets/images/favicon.png" />
</head>

<body>
    <div class="main-wrapper">

        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar">
            <div class="sidebar-header">
                <a href="#" class="sidebar-brand">
                    Noble<span>UI</span>
                </a>
                <div class="sidebar-toggler not-active">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="sidebar-body">
                <ul class="nav">
                    <li class="nav-item nav-category">Main</li>
                    <li class="nav-item">
                        <a href="../../dashboard.html" class="nav-link">
                            <i class="link-icon" data-feather="box"></i>
                            <span class="link-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item nav-category">web apps</li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
                            <i class="link-icon" data-feather="mail"></i>
                            <span class="link-title">Email</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="emails">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="../../pages/email/inbox.html" class="nav-link">Inbox</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/email/read.html" class="nav-link">Read</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/email/compose.html" class="nav-link">Compose</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="../../pages/apps/chat.html" class="nav-link">
                            <i class="link-icon" data-feather="message-square"></i>
                            <span class="link-title">Chat</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../../pages/apps/calendar.html" class="nav-link">
                            <i class="link-icon" data-feather="calendar"></i>
                            <span class="link-title">Calendar</span>
                        </a>
                    </li>
                    <li class="nav-item nav-category">Components</li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
                            <i class="link-icon" data-feather="feather"></i>
                            <span class="link-title">UI Kit</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="uiComponents">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="../../pages/ui-components/accordion.html" class="nav-link">Accordion</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/ui-components/alerts.html" class="nav-link">Alerts</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/ui-components/badges.html" class="nav-link">Badges</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/ui-components/breadcrumbs.html" class="nav-link">Breadcrumbs</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/ui-components/buttons.html" class="nav-link">Buttons</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/ui-components/button-group.html" class="nav-link">Button group</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/ui-components/cards.html" class="nav-link">Cards</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/ui-components/carousel.html" class="nav-link">Carousel</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/ui-components/collapse.html" class="nav-link">Collapse</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/ui-components/dropdowns.html" class="nav-link">Dropdowns</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/ui-components/list-group.html" class="nav-link">List group</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/ui-components/media-object.html" class="nav-link">Media object</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/ui-components/modal.html" class="nav-link">Modal</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/ui-components/navs.html" class="nav-link">Navs</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/ui-components/navbar.html" class="nav-link">Navbar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/ui-components/pagination.html" class="nav-link">Pagination</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/ui-components/popover.html" class="nav-link">Popovers</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/ui-components/progress.html" class="nav-link">Progress</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/ui-components/scrollbar.html" class="nav-link">Scrollbar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/ui-components/scrollspy.html" class="nav-link">Scrollspy</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/ui-components/spinners.html" class="nav-link">Spinners</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/ui-components/tabs.html" class="nav-link">Tabs</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/ui-components/tooltips.html" class="nav-link">Tooltips</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
                            <i class="link-icon" data-feather="anchor"></i>
                            <span class="link-title">Advanced UI</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="advancedUI">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="../../pages/advanced-ui/cropper.html" class="nav-link">Cropper</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/advanced-ui/owl-carousel.html" class="nav-link">Owl carousel</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/advanced-ui/sortablejs.html" class="nav-link">SortableJs</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/advanced-ui/sweet-alert.html" class="nav-link">Sweet Alert</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#forms" role="button" aria-expanded="false" aria-controls="forms">
                            <i class="link-icon" data-feather="inbox"></i>
                            <span class="link-title">Forms</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="forms">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="../../pages/forms/basic-elements.html" class="nav-link">Basic Elements</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/forms/advanced-elements.html" class="nav-link">Advanced Elements</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/forms/editors.html" class="nav-link">Editors</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/forms/wizard.html" class="nav-link">Wizard</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#charts" role="button" aria-expanded="false" aria-controls="charts">
                            <i class="link-icon" data-feather="pie-chart"></i>
                            <span class="link-title">Charts</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="charts">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="../../pages/charts/apex.html" class="nav-link">Apex</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/charts/chartjs.html" class="nav-link">ChartJs</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/charts/flot.html" class="nav-link">Flot</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/charts/morrisjs.html" class="nav-link">Morris</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/charts/peity.html" class="nav-link">Peity</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/charts/sparkline.html" class="nav-link">Sparkline</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#tables" role="button" aria-expanded="false" aria-controls="tables">
                            <i class="link-icon" data-feather="layout"></i>
                            <span class="link-title">Table</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="tables">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="../../pages/tables/basic-table.html" class="nav-link">Basic Tables</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/tables/data-table.html" class="nav-link">Data Table</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#icons" role="button" aria-expanded="false" aria-controls="icons">
                            <i class="link-icon" data-feather="smile"></i>
                            <span class="link-title">Icons</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="icons">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="../../pages/icons/feather-icons.html" class="nav-link">Feather Icons</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/icons/flag-icons.html" class="nav-link">Flag Icons</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/icons/mdi-icons.html" class="nav-link">Mdi Icons</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item nav-category">Pages</li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" role="button" aria-expanded="false" aria-controls="general-pages">
                            <i class="link-icon" data-feather="book"></i>
                            <span class="link-title">Special pages</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="general-pages">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="../../pages/general/blank-page.html" class="nav-link">Blank page</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/general/faq.html" class="nav-link">Faq</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/general/invoice.html" class="nav-link">Invoice</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/general/profile.html" class="nav-link">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/general/pricing.html" class="nav-link">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/general/timeline.html" class="nav-link">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#authPages" role="button" aria-expanded="false" aria-controls="authPages">
                            <i class="link-icon" data-feather="unlock"></i>
                            <span class="link-title">Authentication</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="authPages">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="../../pages/auth/login.html" class="nav-link">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/auth/register.html" class="nav-link">Register</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#errorPages" role="button" aria-expanded="false" aria-controls="errorPages">
                            <i class="link-icon" data-feather="cloud-off"></i>
                            <span class="link-title">Error</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="errorPages">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="../../pages/error/404.html" class="nav-link">404</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/error/500.html" class="nav-link">500</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item nav-category">Docs</li>
                    <li class="nav-item">
                        <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
                            <i class="link-icon" data-feather="hash"></i>
                            <span class="link-title">Documentation</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- partial -->

        <div class="page-wrapper">

            <div class="page-content">

                <div class="row chat-wrapper">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row position-relative">
                                    <div class="col-lg-12 chat-content">
                                        <div class="chat-body">
                                            <ul class="messages" data-id="<?= $_SESSION["user"]->driver_id ?>">
                                            </ul>
                                        </div>
                                        <div class="chat-footer d-flex">
                                            <div class="d-none d-md-block">
                                                <button type="button" class="btn border btn-icon rounded-circle me-2" data-bs-toggle="tooltip" title="Attatch files">
                                                    <i data-feather="paperclip" class="text-muted"></i>
                                                </button>
                                            </div>
                                            <form class="search-form flex-grow-1 me-2">
                                                <div class="input-group">
                                                    <input type="text" class="form-control rounded-pill" id="chatForm" placeholder="Type a message">
                                                </div>
                                            </form>
                                            <div>
                                                <button type="button" id="sendMessage" class="btn btn-primary btn-icon rounded-circle">
                                                    <i data-feather="send"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- core:js -->
    <script src="<?= ROOT ?>assets/vendors/core/core.js"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="<?= ROOT ?>assets/vendors/feather-icons/feather.min.js"></script>
    <script src="<?= ROOT ?>assets/js/template.js"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="<?= ROOT ?>assets/custom/js/chat.js"></script>
    <!-- <script src="<?= ROOT ?>assets/custom/js/fleet_management/chat-driver.js" type="module"></script> -->
    <!-- End custom js for this page -->
    <script type="module">
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

        const chatId = $(".messages").attr("data-id")

        console.log(chatId)

        const messagesList = $(".messages");
        const chatRef = collection(db, "driver-chat");
        const querySnapshot = query(chatRef, where("chat_id", "==", chatId), orderBy("timestamp"));

        onSnapshot(querySnapshot, (snapshot) => {
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
                    const sender = chatData.is_me;
                    const isMe = sender === 1;
                    const isSender = sender === 0;
                    const messageItemClass = isMe ? "message-item me" : "message-item friend";
                    const chatMessageHTML = `
                    <li class="${messageItemClass}">
                          <img src="https://via.placeholder.com/36x36" class="img-xs rounded-circle" alt="avatar">
                          <div class="content">
                            <div class="message">
                              <div class="bubble">
                                <p>${chatMessage}</p>
                              </div>
                            </div>
                          </div>
                        </li>`;
                
                    messagesList.append(chatMessageHTML);

                    messagesList.scrollTop(messagesList[0].scrollHeight);
                }
            });
        }, (error) => {
            console.log(`Encountered error: ${error}`);
        });


        $("#chatForm").keypress(function(event) {
            if (event.which == 13) {
                event.preventDefault(); // prevent default form submit behavior
                $('#sendMessage').click(); // trigger click event on send button
            }
        });

        $("#sendMessage").on("click", function(e) {
            const chatForm = $("#chatForm").val().trim();
            if (!chatForm) {
                return;
            }
            $("#chatForm").val("");
            // Add chatForm value to the firebase
            addDoc(chatRef, {
                chat_id: chatId,
                is_me: 1,
                message: chatForm,
                timestamp: new Date(),
            });
        });
    </script>

</body>

</html>