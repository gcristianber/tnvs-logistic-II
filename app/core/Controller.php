<?php

// namespace Controller;

trait Controller{

    public function view($view, $data = []){

        if(!empty($data))
			extract($data);
        require("../app/view/". $view .".view.php");   
    }

}