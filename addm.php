<?php 

require "bootstrap/init.php";

if(Is_logged_in()){
    require "template/manage.php";
}else{
    require  "template/auth.php";
}
