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

# Show Locations
function Show_location($param = [])
{
    # connect to database
    global $connection;

    # Create a Condition
    $condition = "";
    if (isset($param["status"]) and in_array($param["status"] , ["1","0"])) {
        $condition = "WHERE Status = {$param['status']}";
    }  

    # Show All locations Query
    $sql = "SELECT * FROM location $condition";
    $stmt = $connection->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
}