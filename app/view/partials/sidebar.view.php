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
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="<?= ROOT ?>general/dashboard" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>

            <?php if (in_array($_SESSION["user"]->user_role, ['super admin', 'staff', 'audit manager', 'fleet manager', 'vendor manager'])) : ?>
                <li class="nav-item nav-category">Document Tracking</li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>document_tracking/track_documents" class="nav-link">
                        <i class="link-icon" data-feather="search"></i>
                        <span class="link-title">Track Document</span>
                    </a>
                </li>
            <?php endif; ?>

            <?php if (in_array($_SESSION["user"]->user_role, ['super admin', 'fleet manager'])) : ?>
                <li class="nav-item nav-category">Vehicle Reservation</li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>vehicle_reservation/browse_vehicles" class="nav-link">
                        <i class="link-icon" data-feather="truck"></i>
                        <span class="link-title">Browse Vehicles</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>vehicle_reservation/my_reservations" class="nav-link">
                        <i class="link-icon" data-feather="table"></i>
                        <span class="link-title">My Reservations</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>vehicle_reservation/manage_reservations" class="nav-link">
                        <i class="link-icon" data-feather="settings"></i>
                        <span class="link-title">Manage Reservations</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>vehicle_reservation/reservation_reports" class="nav-link">
                        <i class="link-icon" data-feather="flag"></i>
                        <span class="link-title">Manage Reports</span>
                    </a>
                </li>
            <?php endif; ?>
            <?php if (in_array($_SESSION["user"]->user_role, ['staff'])) : ?>
                <li class="nav-item nav-category">Vehicle Reservation</li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>vehicle_reservation/browse_vehicles" class="nav-link">
                        <i class="link-icon" data-feather="truck"></i>
                        <span class="link-title">Browse Vehicles</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>vehicle_reservation/my_reservations" class="nav-link">
                        <i class="link-icon" data-feather="table"></i>
                        <span class="link-title">My Reservations</span>
                    </a>
                </li>
            <?php endif; ?>
            <?php if (in_array($_SESSION["user"]->user_role, ['super admin', 'vendor manager'])) : ?>
                <li class="nav-item nav-category">Vendor Portal</li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>vendor_portal_admin/portal_requests" class="nav-link">
                        <i class="link-icon" data-feather="mail"></i>
                        <span class="link-title">Requests</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>vendor_portal_admin/awardings" class="nav-link">
                        <i class="link-icon" data-feather="gift"></i>
                        <span class="link-title">Award List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>vendor_portal_admin/manage_vendors" class="nav-link">
                        <i class="link-icon" data-feather="users"></i>
                        <span class="link-title">Manage Vendors</span>
                    </a>
                </li>
            <?php endif; ?>

            <?php if (in_array($_SESSION["user"]->user_role, ['super admin', 'audit manager'])) : ?>
                <li class="nav-item nav-category">audit management</li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>audit_management/inventory" class="nav-link">
                        <i class="link-icon" data-feather="archive"></i>
                        <span class="link-title">Inventory</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>audit_management/audit_reports" class="nav-link">
                        <i class="link-icon" data-feather="flag"></i>
                        <span class="link-title">Manage Reports</span>
                    </a>
                </li>
            <?php endif; ?>

            <?php if (in_array($_SESSION["user"]->user_role, ['super admin', 'fleet manager'])) : ?>

                <li class="nav-item nav-category">Fleet Management</li>

                <li class="nav-item">
                    <a href="<?= ROOT ?>fleet_management_admin/manage_drivers" class="nav-link">
                        <i class="link-icon" data-feather="users"></i>
                        <span class="link-title">Manage Drivers</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>fleet_management_admin/manage_vehicles" class="nav-link">
                        <i class="link-icon" data-feather="truck"></i>
                        <span class="link-title">Manage Vehicles</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>fleet_management_admin/maintenance" class="nav-link">
                        <i class="link-icon" data-feather="settings"></i>
                        <span class="link-title">Manage Maintenance</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>fleet_management_admin/delivery_requests" class="nav-link">
                        <i class="link-icon" data-feather="archive"></i>
                        <span class="link-title">Manage Deliveries</span>
                    </a>
                </li>
            <?php endif; ?>

            <?php if (in_array($_SESSION["user"]->user_role, ['fleet driver'])) : ?>
                <li class="nav-item nav-category">fleet driver</li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>driver/" class="nav-link">
                        <i class="link-icon" data-feather="mail"></i>
                        <span class="link-title">Inbox</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="link-icon" data-feather="message-square"></i>
                        <span class="link-title">Messages</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>driver/deliveries" class="nav-link">
                        <i class="link-icon" data-feather="archive"></i>
                        <span class="link-title">Deliveries</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="link-icon" data-feather="clock"></i>
                        <span class="link-title">Activity Logs</span>
                    </a>
                </li>

            <?php endif; ?>

            <?php if (in_array($_SESSION["user"]->user_role, ['vendor'])) : ?>
                <li class="nav-item nav-category">Vendor Portal</li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>vendor_portal_admin/tenders" class="nav-link">
                        <i class="link-icon" data-feather="shopping-cart"></i>
                        <span class="link-title">Tenders</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>vendor_portal_admin/auctions" class="nav-link">
                        <i class="link-icon" data-feather="tag"></i>
                        <span class="link-title">Auctions</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT ?>driver/" class="nav-link">
                        <i class="link-icon" data-feather="mail"></i>
                        <span class="link-title">Inbox</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="link-icon" data-feather="message-square"></i>
                        <span class="link-title">Messages</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="link-icon" data-feather="clock"></i>
                        <span class="link-title">Activity Logs</span>
                    </a>
                </li>

            <?php endif; ?>


        </ul>

    </div>
</nav>