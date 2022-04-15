<?php
# Call init file for use it
require "../bootstrap/init.php";

# Check is it ajax request
if(!isajax()){
    dienotice("Invalid request. <br> pls be <b>GENTLE</b>");
}

# Action for Decide
$action = $_POST["action"];

# Decide
switch ($action) {
    case 'add-location':
        if (Add_location($_POST)) {
            echo "Adding Successfully location";
        }else{
            echo "Adding denied location";
        }
        break;
}