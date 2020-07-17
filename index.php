<?php

include 'db_connection.php';
$conn = OpenCon();

// $pdo=new PDO('mysql:host=localhost;port=3306;dbname=project','root', 'root');
if($conn != null ){
    $stmt = $conn->query("SELECT * FROM user");
    while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
        echo $row['id']. "\t";
        echo $row['username']. "\t";
        echo $row['password']. "\t";
        echo $row['time_created']. "<br>";
    } 
} else {
    echo ('</br> "Failed to connect to DB" ');
}
