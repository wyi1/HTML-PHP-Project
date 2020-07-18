<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin Page</title>
  <meta charset="UTF-8">
  <link rel='stylesheet' type='text/css' href='style.css'>
</head>

<style>

h1{
  font-family: monospace;
  color: #F08080;
}
body{
  text-align: center;
  background-color: #FFF0F5;
  font-family: sans-serif;
}
</style>

<body>
  <h1>Quiz Result from All User</h1>
<?php

include 'db_connection.php';
$conn = OpenCon();
$pdo=new PDO('mysql:host=localhost;port=3306;dbname=project',
     'root', '');
$stmt = $pdo->query("SELECT * FROM quiz_result");
?>
<table id="data">
  <tr>
    <!-- <th>ID</th> -->
    <th>ID </th>
    <th>Correct Answer ( /5)</th>
    <th>Percent (%)</th>
    <th>Time Accessed</th>
  </tr>
<?php
while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
    echo "<tr>";
    echo "<td>".$row['id']. "\t </td>";
    echo "<td>".$row['quizresult']. "\t </td>";
    echo "<td>".$row['percent']. "\t </td>";
    echo "<td>".$row['time_access']. "\t </td>";
    echo "</tr>";
}
?>
</table>
