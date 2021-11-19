<?php
require __DIR__ ."/database_credential.php";

//creating connection
$connection = new mysqli(servername, username, password, dbname);

//checking connection
if($connection->connect_error){
    die("connection failed:" .$connection-> connect_error); 
    echo"connection failed";
}
else{
    echo "Connection successful". "<br>";

}


?>
