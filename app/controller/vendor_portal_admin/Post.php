<?php 

session_start();

class Post{

    use Controller;

    public function index(){

        $this->view("vendor_portal/admin/post");
        $this->view("partials/sidebar");
        $this->view('partials/navbar');
    }
}