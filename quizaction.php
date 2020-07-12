<?php
$id = $_REQUEST["id"];
$quizresult = $_REQUEST["quizresult"];
$percentage = $_REQUEST["percentage"];
include 'db_connection.php';
$conn = OpenCon();
$pdo=new PDO('mysql:host=localhost;port=3306;dbname=project',
     'root', '1234');
     $stmt = $pdo->prepare("INSERT INTO quiz (id,quizresult,percent)
     VALUES (:id, :quizresult, :percentage)");
     $stmt->bindParam(':id', $id);
     $stmt->bindParam(':quizresult', $quizresult);
     $stmt->bindParam(':percentage', $percentage);
     $stmt->execute();


         echo "Succesfully registered. Please head to ";


     ?>
