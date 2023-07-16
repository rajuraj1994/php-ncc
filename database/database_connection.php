<?php
$server_name = "localhost";
$user = "root";
$password = "";
$db_name = "dw_swimming_camping";

//connection
$con = new mysqli($server_name, $user, $password,$db_name);

// connection check 
if(!$con){
    die('failed to connect to database');
}
else{
//     echo 'database connected';
// //    session start
//     session_start();

}

?>