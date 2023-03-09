`<nav class="sidebar">
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

            <li class="nav-item nav-category">MANAGE</li>
            <li class="nav-item">
                <a href="<?= ROOT ?>vendor_portal_admin/manage_vendor_contracts" class="nav-link">
                    <i class="link-icon" data-feather="grid"></i>
                    <span class="link-title">Browse</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= ROOT ?>vendor_portal_admin/manage_vendor_contracts" class="nav-link">
                    <i class="link-icon" data-feather="feather"></i>
                    <span class="link-title">Contracts</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="<?= ROOT ?>vendor_portal_admin/manage_vendor_contracts" class="nav-link">
                    <i class="link-icon" data-feather="file"></i>
                    <span class="link-title">Proposals</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= ROOT ?>vendor_portal_admin/purchase_requests" class="nav-link">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Bidding Invites</span>
                </a>
            </li>
            

        </ul>
    </div>
</nav>