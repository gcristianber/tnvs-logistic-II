<?php

class Feedbacks
{

    use Controller;

    public function index()
    {
        $data = [];


        $this->view('partials/navbar');
        $this->view("vehicle_reservation/feedbacks", $data);
        $this->view("partials/sidebar");
       

    }

}
