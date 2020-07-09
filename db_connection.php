<?php

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "1234";
 $db = "project";

 try {
   $conn = new PDO("mysql:host=$dbhost;dbname=project", $dbuser, $dbpass);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch(PDOException $e) {
   echo "Connection failed: " . $e->getMessage();
 }
}

function CloseCon($conn)
 {
 $conn -> close();
 }

?>
