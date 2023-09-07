<?php

spl_autoload_register(function ($classname) {
	require $filename = "../app/model/" . ucfirst($classname) . ".php";
});

require("vendor/autoload.php");

require("const.php");
require("functions.php");
require("core/Database.php");
require("core/Model.php");
require("core/Controller.php");
require("core/App.php");
