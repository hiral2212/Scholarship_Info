<?php

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "scholarship_portal";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connection to 
 Db failed: %s\n". $conn -> error);
 
 return $conn;
 }
 

?>