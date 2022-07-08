<?php

require "bootstrap/init.php";

$location = false;
if(isset($_GET["location"]) and is_numeric($_GET["location"])){
    $location = Get_location($_GET["location"]);
}

require "template/home.php";