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

            <li class="nav-item nav-category">vendor portal</li>
            <li class="nav-item">
                <a href="<?= ROOT ?>vendor_portal_admin/purchase_requests" class="nav-link">
                    <i class="link-icon" data-feather="shopping-cart"></i>
                    <span class="link-title">Purchase Requests</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= ROOT ?>vendor_portal_admin/manage_vendor_contracts" class="nav-link">
                    <i class="link-icon" data-feather="feather"></i>
                    <span class="link-title">Manage Contracts</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= ROOT ?>vendor_portal_admin/manage_vendors" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Manage Vendors</span>
                </a>
            </li>

        </ul>
    </div>
</nav>