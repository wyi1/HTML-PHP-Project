<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home Page</title>
<meta charset="UTF-8">
</head>
<body>
	<h1>Welcome User!</h1>
  <table>
    <tr>
    <th>ID</th>
    <th>Correct Answer (/5)</th>
    <th>Percent (%)</th>
    <th>Time Accessed</th>
  </tr>
  <?php
  include 'db_connection.php';
  $conn = OpenCon();
  $pdo=new PDO('mysql:host=localhost;port=3306;dbname=project',
       'root', '1234');
  $uname = $_GET['name'];
  if ( isset($_REQUEST['name']) ) {
   echo "<p>Welcome: ";
   echo htmlentities($_REQUEST['name']);
   echo "</p>\n";
  }

  $query1 = $pdo->query("SELECT id FROM user where username = '$uname' ");
  $r1 = $query1->fetch(PDO::FETCH_ASSOC);
  $id =  $r1['id'];

  $stmt = $pdo->query("SELECT * FROM quiz_result where id = '$id'");

while ( $row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr>";
      echo "<td>". $row['id']. "\t </td>";
      echo "<td>". $row['quizresult']. "\t </td>";
      echo "<td>". $row['percent']. "\t </td>";
      echo "<td>". $row['time_access']. "<br></td>";
      echo "</tr>";
  }

  if ( ! isset($_GET['name']) || strlen($_GET['name']) < 1 ) {
   die('Name parameter missing');
  }
  if ( isset($_POST['logout']) ) {
   header("Location: login.php");
   return;
  }
  if ( isset($_POST['play']) ) {
  header("Location: quiz.php?name=".urlencode($uname)."&id=".urlencode($id));
  return;
  }


    ?>

</table>
    <form method="post">
      <button type="submit" name="play">Play the Quiz</button>
      <button type="submit" name="logout">Logout</button>

    </form>
