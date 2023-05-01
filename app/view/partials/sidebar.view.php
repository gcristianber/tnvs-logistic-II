<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            <img class="ht-30 wd-30" src="<?= ROOT ?>assets/images/favicon.png" alt="">
            Lulan
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <?php if ($_SESSION["user"]->user_role == 'super admin') : ?>
                <li class="nav-item nav-category">Main</li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>general/dashboard" class="nav-link">
                        <i class="link-icon" data-feather="box"></i>
                        <span class="link-title">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item nav-category">document tracking</li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>document_tracking/track_documents" class="nav-link">
                        <i class="link-icon" data-feather="search"></i>
                        <span class="link-title">Track Document</span>
                    </a>
                </li>

                <li class="nav-item nav-category">vehicle reservation</li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>vehicle_reservation/browse_vehicles" class="nav-link">
                        <i class="link-icon" data-feather="grid"></i>
                        <span class="link-title">Browse Vehicles</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>vehicle_reservation/my_reservations" class="nav-link">
                        <i class="link-icon" data-feather="send"></i>
                        <span class="link-title">My Reservations</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>vehicle_reservation/manage_reservations" class="nav-link">
                        <i class="link-icon" data-feather="settings"></i>
                        <span class="link-title">Manage Reservations</span>
                    </a>
                </li>
                <li class="nav-item nav-category">vendor portal</li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>vendor_portal_admin/tenders" class="nav-link">
                        <i class="link-icon" data-feather="mail"></i>
                        <span class="link-title">Tenders</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>vendor_portal_admin/awardings" class="nav-link">
                        <i class="link-icon" data-feather="award"></i>
                        <span class="link-title">Awardings</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>vendor_portal_admin/manage_vendors" class="nav-link">
                        <i class="link-icon" data-feather="users"></i>
                        <span class="link-title">Vendors</span>
                    </a>
                </li>

                <li class="nav-item nav-category">audit management</li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>audit_management/inventory" class="nav-link">
                        <i class="link-icon" data-feather="list"></i>
                        <span class="link-title">Inventory</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="link-icon" data-feather="file-text"></i>
                        <span class="link-title">Reports</span>
                    </a>
                </li>
                <li class="nav-item nav-category">fleet management</li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>fleet_management_admin/track_deliver" class="nav-link">
                        <i class="link-icon" data-feather="navigation"></i>
                        <span class="link-title">Track Deliver</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>fleet_management_admin/delivery_requests" class="nav-link">
                        <i class="link-icon" data-feather="mail"></i>
                        <span class="link-title">Deliveries</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>fleet_management_admin/manage_vehicles" class="nav-link">
                        <i class="link-icon" data-feather="truck"></i>
                        <span class="link-title">Manage Vehicles</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>fleet_management_admin/manage_drivers" class="nav-link">
                        <i class="link-icon" data-feather="users"></i>
                        <span class="link-title">Manage Drivers</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>fleet_management_admin/maintenance" class="nav-link">
                        <i class="link-icon" data-feather="settings"></i>
                        <span class="link-title">Maintenance</span>
                    </a>
                </li>

                <li class="nav-item nav-category">logistic driver</li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="link-icon" data-feather="package"></i>
                        <span class="link-title">Deliveries</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="link-icon" data-feather="message-circle"></i>
                        <span class="link-title">Messages</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="link-icon" data-feather="clock"></i>
                        <span class="link-title">Activity Logs</span>
                    </a>
                </li>

                <li class="nav-item nav-category">Legal Policy</li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>" class="nav-link">
                        <i class="link-icon" data-feather="feather"></i>
                        <span class="link-title">Terms and Condition</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>" class="nav-link">
                        <i class="link-icon" data-feather="anchor"></i>
                        <span class="link-title">Privacy and Policy</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>" class="nav-link">
                        <i class="link-icon" data-feather="info"></i>
                        <span class="link-title">About Us</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>" class="nav-link">
                        <i class="link-icon" data-feather="list"></i>
                        <span class="link-title">FAQs</span>
                    </a>
                </li>
            <?php endif; ?>
            <?php if ($_SESSION["user"]->user_role == 'audit manager') : ?>
                <li class="nav-item nav-category">Main</li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>general/dashboard" class="nav-link">
                        <i class="link-icon" data-feather="box"></i>
                        <span class="link-title">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item nav-category">document tracking</li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>document_tracking/track_documents" class="nav-link">
                        <i class="link-icon" data-feather="search"></i>
                        <span class="link-title">Track Document</span>
                    </a>
                </li>

                <li class="nav-item nav-category">vehicle reservation</li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>vehicle_reservation/browse_vehicles" class="nav-link">
                        <i class="link-icon" data-feather="grid"></i>
                        <span class="link-title">Browse Vehicles</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>vehicle_reservation/my_reservations" class="nav-link">
                        <i class="link-icon" data-feather="send"></i>
                        <span class="link-title">My Reservations</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>vehicle_reservation/" class="nav-link">
                        <i class="link-icon" data-feather="bookmark"></i>
                        <span class="link-title">Bookmarks</span>
                    </a>
                </li>

                <li class="nav-item nav-category">audit management</li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>audit_management/create_report" class="nav-link">
                        <i class="link-icon" data-feather="search"></i>
                        <span class="link-title">Create Report</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>audit_management/audit_logs" class="nav-link">
                        <i class="link-icon" data-feather="feather"></i>
                        <span class="link-title">Audit Reports</span>
                    </a>
                </li>

                <li class="nav-item nav-category">Legal Policy</li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>" class="nav-link">
                        <i class="link-icon" data-feather="feather"></i>
                        <span class="link-title">Terms and Condition</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>" class="nav-link">
                        <i class="link-icon" data-feather="anchor"></i>
                        <span class="link-title">Privacy and Policy</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>" class="nav-link">
                        <i class="link-icon" data-feather="info"></i>
                        <span class="link-title">About Us</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>" class="nav-link">
                        <i class="link-icon" data-feather="list"></i>
                        <span class="link-title">FAQs</span>
                    </a>
                </li>
            <?php endif; ?>
            <?php if ($_SESSION["user"]->user_role == 'fleet manager') : ?>
                <li class="nav-item nav-category">Main</li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>general/dashboard" class="nav-link">
                        <i class="link-icon" data-feather="box"></i>
                        <span class="link-title">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item nav-category">document tracking</li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>document_tracking/track_documents" class="nav-link">
                        <i class="link-icon" data-feather="search"></i>
                        <span class="link-title">Track Document</span>
                    </a>
                </li>

                <li class="nav-item nav-category">vehicle reservation</li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>vehicle_reservation/browse_vehicles" class="nav-link">
                        <i class="link-icon" data-feather="grid"></i>
                        <span class="link-title">Browse Vehicles</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>vehicle_reservation/" class="nav-link">
                        <i class="link-icon" data-feather="bookmark"></i>
                        <span class="link-title">Bookmarks</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>vehicle_reservation/manage_reservations" class="nav-link">
                        <i class="link-icon" data-feather="settings"></i>
                        <span class="link-title">Manage Reservations</span>
                    </a>
                </li>

                <li class="nav-item nav-category">fleet management</li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>fleet_management_admin/track_deliver" class="nav-link">
                        <i class="link-icon" data-feather="navigation"></i>
                        <span class="link-title">Track Deliver</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= ROOT ?>fleet_management_admin/delivery_requests" class="nav-link">
                        <i class="link-icon" data-feather="mail"></i>
                        <span class="link-title">Delivery Requests</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>fleet_management_admin/manage_vehicles" class="nav-link">
                        <i class="link-icon" data-feather="truck"></i>
                        <span class="link-title">Manage Vehicles</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>fleet_management_admin/manage_drivers" class="nav-link">
                        <i class="link-icon" data-feather="users"></i>
                        <span class="link-title">Manage Drivers</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>fleet_management_admin/maintenance" class="nav-link">
                        <i class="link-icon" data-feather="settings"></i>
                        <span class="link-title">Maintenance</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>fleet_management_admin/shipment_management" class="nav-link">
                        <i class="link-icon" data-feather="package"></i>
                        <span class="link-title">Shipment Management</span>
                    </a>
                </li>

                <li class="nav-item nav-category">Legal Policy</li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>" class="nav-link">
                        <i class="link-icon" data-feather="feather"></i>
                        <span class="link-title">Terms and Condition</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>" class="nav-link">
                        <i class="link-icon" data-feather="anchor"></i>
                        <span class="link-title">Privacy and Policy</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>" class="nav-link">
                        <i class="link-icon" data-feather="info"></i>
                        <span class="link-title">About Us</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>" class="nav-link">
                        <i class="link-icon" data-feather="list"></i>
                        <span class="link-title">FAQs</span>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>