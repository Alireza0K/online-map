<?php 

# Adding Location in DB
function Add_location($data)
{
    # connect to database
    global $connection;

    # Add location with data
    $sql = "INSERT INTO location (User_id, Lat, Lng, Type , Name) VALUES ( :user_id , :lat , :lng , :type , :name )";
    $stmt = $connection->prepare($sql);
    $stmt->execute(["user_id"=>current_user_id() , "lat" => $data["lat"] , "lng" => $data["lng"] ,"type" => $data["place_types"] ,"name" => $data["place_name"]]);
    return true;
}