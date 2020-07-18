<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home Page</title>
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
  <!-- <h1>Welcome User!</h1> -->
  <?php
  session_start();
  if (!isset($_SESSION['uname']) || strlen($_SESSION['uname']) < 1) {
    die("Please head to <a href='login.php'>Login</a>");
  }
  ?>
  <table id="data">
    <tr>
      <!-- <th>ID</th> -->
      <th>No. </th>
      <th>Correct Answer ( /5)</th>
      <th>Percent (%)</th>
      <th>Time Accessed</th>
    </tr>
    <?php
    include 'db_connection.php';
    $conn = OpenCon();
    // $pdo=new PDO('mysql:host=localhost;port=3306;dbname=project','root', '1234');

    $uname = $_SESSION['uname'];
    if ($_SESSION['uname']) {
      echo "<h1>WELCOME, ";
      echo htmlentities($_SESSION['uname']);
      echo "!</h1>\n";
    }

    $query1 = $conn->query("SELECT id FROM user where username = '$uname' ");
    $r1 = $query1->fetch(PDO::FETCH_ASSOC);
    $id =  $r1['id'];

    $stmt = $conn->query("SELECT * FROM quiz_result where id = '$id'");

    $stmt->execute();
    $resultJSON = json_encode($stmt->fetchAll());
    if (!json_decode($resultJSON, true) ) {
      echo "<tr>";
      echo "<td colspan=\"4\" style=\"text-align: center;\">No Records Available</td>";
      echo "</tr>";
    } else {
      foreach (json_decode($resultJSON, true) as $index => $row) {
        echo "<tr>";
        // echo "<td>" . $row['id'] . "\t </td>";
        echo "<td>" . ($index + 1) . "\t </td>";
        echo "<td>" . $row['quizresult'] . "\t </td>";
        echo "<td>" . $row['percent'] . "\t </td>";
        echo "<td>" . $row['time_access'] . "<br></td>";
        echo "</tr>";
      }
    }

    if (isset($_POST['logout'])) {
      unset($SESSION['uname']);
      header("Location: login.php");
      return;
    }
    if (isset($_POST['play'])) {
      header("Location: quiz.php?name=" . urlencode($uname) . "&id=" . urlencode($id));
      return;
    }


    ?>

  </table>
  <form method="post">
    <button type="submit" name="play" class="btn button1">Play the Quiz</button>
    <button type="submit" name="logout" class="btn button2">Logout</button>

  </form>
