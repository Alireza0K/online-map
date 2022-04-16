<?php 
 
# Current User ID
function current_user_id()
{
    return 1;
}

# Check is User logged in
function Is_logged_in()
{
   return isset($_SESSION["login"]);
}

# Logout function
function  Logout(){
   unset($_SESSION["login"]);
}

# Login function
function Login($user,$pass)
{
   # Call admins list 
   global $admins;

   # Login process
   if(array_key_exists($user , $admins) and $admins[$user] == $pass){
      $_SESSION["login"] = true;
      return true;
   }
   return false;
}