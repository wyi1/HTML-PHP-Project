<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home Page</title>
<meta charset="UTF-8">
</head>
<body>
	<h1>Welcome User!</h1>
  <?php
  include 'db_connection.php';
  $conn = OpenCon();
  $pdo=new PDO('mysql:host=localhost;port=3306;dbname=project',
       'root', '1234');

  if ( ! isset($_GET['name']) || strlen($_GET['name']) < 1 ) {
   die('Name parameter missing');
  }
  $who = $_GET['name'];
  if ( isset($_POST['logout']) ) {
   header("Location: login.php");
   return;
  }
  if ( isset($_POST['play']) ) {
  header("Location: quiz.php");
  return;
  }
  if ( isset($_REQUEST['name']) ) {
   echo "<p>Welcome: ";
   echo htmlentities($_REQUEST['name']);
   echo "</p>\n";
  }
  $uname = $_GET['name'];
  $query1 = $pdo->query("SELECT id FROM user where username = '$uname' ");
  $r1 = $query1->fetch(PDO::FETCH_ASSOC);
  $stmt = $pdo->query("SELECT * FROM quiz where id = '$r1'");
  while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
      echo $row['id']. "\t";
      echo $row['username']. "\t";
      echo $row['password']. "\t";
      echo $row['time_created']. "<br>";
  }
    ?>
    <form method="post">
      <button type="submit" name="play">Play the Quiz</button>
      <button type="submit" name="logout">Logout</button>

    </form>
