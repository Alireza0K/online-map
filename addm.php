<?php 

require "bootstrap/init.php";

if(Is_logged_in()){
    $params = $_GET;
    $get_locations = Show_location($params);
    require "template/manage.php";
}else{
    require  "template/auth.php";
}
