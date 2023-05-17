<?php

trait Controller
{
    protected $roles = [
        'super admin'          => ['*'], 
        'admin'                => ['login', 'logout', 'dashboard'],
        'staff'                => ['login', 'logout', 'dashboard', 'browse_vehicles', 'my_reservations', 'insert_reservation', 'track_documents'],
        'audit manager'        => ['login', 'logout', 'dashboard', 'track_documents', 'inventory', 'audit_reports', 'insert_report'],
        'fleet manager'        => ['login', 'logout', 'dashboard', 'track_documents', 'browse_vehicles', 'my_reservations','manage_reservations','reservation_reports', 'manage_drivers', 'manage_vehicles','maintenance', 'delivery_requests', 'create_new', 'insert_new_delivery', 'insert_line_items', 'navigate'],
        'fleet driver'         => ['login', 'logout', 'dashboard', 'deliveries', 'view_delivery', 'update_status'],
        'vendor manager'       => ['login', 'logout', 'dashboard', 'track_documents', 'tenders', 'auctions', 'awardings', 'manage_vendors', 'portal_requests', 'manage_post', 'compare_bid', 'preview_tender'],
        'vendor'               => ['login', 'logout', 'dashboard', 'tenders', 'auctions', 'awardings','otp_vendor', 'preview_tender', 'submit_bid']
    ];

    public function __construct()
    {
        $this->checkAccess();
    }

    public function view($view, $data = [])
    {
        if (!empty($data))
            extract($data);

        require("../app/view/" . $view . ".view.php");
    }

    public function checkAccess()
    {
        // Check if user is logged in
        if (!isset($_SESSION['user'])) {
            return;
        }

        // Get user's role
        $role = $_SESSION['user']->user_role;

        // Get allowed pages for role
        $allowedPages = $this->roles[$role];

        // Check if user is super admin
        if ($role === 'super admin') {
            return; // Super admin has access to all pages, so no need to check further
        }

        // Get current page
        $currentPage = $this->getCurrentPage();

        // Check if current page is allowed for user's role
        if (!in_array($currentPage, $allowedPages)) {
            // Redirect to error page
            $this->view("error/_404");
            exit();
        }
    }

    private function getCurrentPage()
    {
        // Get current page URL
        $currentPage = $_SERVER['REQUEST_URI'];

        // Strip query string
        $currentPage = strtok($currentPage, '?');

        // Get page name
        $currentPage = basename($currentPage);

        return $currentPage;
    }
}
