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
    case 'login':
        if(Login($_POST["username"] , $_POST["password"])){
            echo "Login Success Fully :)";
        }else{
            echo "Username or Password is invalid";
        }
        break;
    case "logout":
        Logout();
        break;
    case "active-location":
        Activate_location($_POST["loc_id"]);
        break;
    case "deactive-location":
        Deactive_location($_POST["loc_id"]);
        break;
    case "live-search":
        $keyword = $_POST["keyword"];
        if (!isset($keyword) or empty($keyword)) {
            dienotice("pls seaech some place");
        }
        $all_results = Show_location(["keywords" => $keyword]);
        foreach($all_results as $result){
            echo "<a href='?location=$result->ID'><div class='result'> <div class='left-content  contentt-result'> <h4>$result->Name</h4> <h4>".location_types[$result->Type]."</h4> </div> <div class='right-content  contentt-result'> <button class='btn' value='[$result->Lat , $result->Lng]'>locate</button> </div> </div></a>";
        }
        break;
}