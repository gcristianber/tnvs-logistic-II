<?php

class App{

    private $systems = [
        "authentication"        => "authentication",
        "document_tracking"     => "document_tracking",
        "audit_management"      => "audit_management",
        "vehicle_reservation"   => "vehicle_reservation",
        "vendor_portal"         => "vendor_portal",
        "fleet_management"      => "fleet_management"
    ];

    protected $system       = "authentication";
    protected $controller   = "Login";
    protected $method       = "index";
    protected $params       = [];

    public function __construct(){
        $url = self::splitURL();

        if(!array_key_exists($url[0], $this->systems)){
            //! Handle error
        }

        $subDirectory = $this->systems[$url[0]];

        unset($url[0]);

        if(isset($url[1])){
            $controllerPath = "../app/controller/".$subDirectory."/".ucfirst($url[1]).".php";
            if(file_exists($controllerPath)){
                require ($controllerPath);
                $this->controller = ucfirst($url[1]);
                unset($url[1]);
            }
        }
        
        $controller = new $this->controller;

        if(isset($url[2])){
            if(method_exists($this->controller, $url[2])){
                $this->method =$url[2];
                unset($url[2]);
            }
        }

        if(!empty($url)){
            $this->params = array_values($url);
        }

        
        call_user_func_array([$controller, $this->method], $this->params);


       
    }

    private function splitURL()
	{
		$URL = $_GET['url'] ?? 'authentication/login';
		$URL = explode("/", trim($URL,"/"));
		return $URL;	
	}


}
