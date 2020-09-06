<?php
$server = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "expressbooking";

// connect to the database
$db_con = mysqli_connect($server, $dbuser, $dbpass, $dbname);

if($db_con){
    echo "done";
}

?>