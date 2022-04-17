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

# Locate Location
function Get_location($id)
{
    # connect to database
    global $connection;

    # Show All locations Query
    $sql = "SELECT * FROM location WHERE ID = :id";
    $stmt = $connection->prepare($sql);
    $stmt->execute(["id" => $id]);
    $result = $stmt->fetch(PDO::FETCH_OBJ);
    return $result;
}

# Activate location function 
function Activate_location($id)
{
    # connect to database
    global $connection;

    # Query for toggle location Status
    $sql = "UPDATE location SET Status = 1   WHERE ID = :id";
    $stmt = $connection->prepare($sql);
    $stmt->execute(["id" => $id]);
}

# Deactive location function 
function Deactive_location($id)
{
    # connect to database
    global $connection;

    # Query for toggle location Status
    $sql = "UPDATE location SET Status = 0   WHERE ID = :id";
    $stmt = $connection->prepare($sql);
    $stmt->execute(["id" => $id]);
}