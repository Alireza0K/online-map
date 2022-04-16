<?php 

# Call All File
require "constant.php";
require "config.php";
require BASE_PATH . "./libs/helper.php";

# Create connection
try {
    $connection = new PDO("mysql:host={$c_information->host};dbname={$c_information->dbname};", $c_information->username , $c_information->password);
} catch (PDOException $e) {
    dienotice($e);
    die();
}

# Call libs
require BASE_PATH . "./libs/user.php";
require BASE_PATH . "./libs/location.php";