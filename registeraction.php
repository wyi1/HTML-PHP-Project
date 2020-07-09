<?php
$username = $_POST["Username"];
$password = md5($_POST["Password"]);

include 'db_connection.php';
include 'register.php';
$conn = OpenCon();
$pdo=new PDO('mysql:host=localhost;port=3306;dbname=project',
     'root', '1234');
$stmt = $pdo->prepare("INSERT INTO user (username,password)
VALUES (:username, :password)");
    $stmt->bindParam(':username', $username);

    $stmt->bindParam(':password', $password);


    $stmt->execute();


    echo "Succesfully registered. Please head to ";


?>
<a href="login.php">Login</a>
