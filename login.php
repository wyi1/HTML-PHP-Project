<!DOCTYPE html>
<html lang="en">

<html>

<head>
  <link rel='stylesheet' type='text/css' href='style.css'>
</head>

<meta charset=utf-8 />
<title>Login</title>

<body>
  <h1>Login to Play</h1>

  <?php
  include 'db_connection.php';
  $conn = OpenCon();
  // $pdo=new PDO('mysql:host=localhost;port=3306;dbname=project','root', '1234');


  if (isset($_POST['uname']) && isset($_POST['pw'])) {
    $uname = $_POST['uname'];
    $pw = $_POST['pw'];
    $stored_hash = md5($_POST['pw']);
    if (strlen($uname) < 1 || strlen($pw) < 1) {
      $msg = "User name and password are required";
      if ($msg !== false) {
        echo ('<p style="color: red;">' . htmlentities($msg) . "</p>\n");
      }
    } else {
      $query1 = "SELECT * FROM user WHERE username='$uname'";
      $result1 = $conn->query($query1);
      if ($result1->rowCount() == 1) {
        $query2 = "SELECT username,password FROM user WHERE username='$uname'";
        $result2 = $conn->query($query2);
        session_start();
        while ($row = $result2->fetch(PDO::FETCH_ASSOC)) {
          $_SESSION["uname"] = $row['username'];
          $pwdata = $row["password"];
        }
        //echo $result2; //Testing to see if am getting the hashed password.
        if ($stored_hash == $pwdata) {
          header("Location: home.php");
          return;
        } else {
          $msg = "Incorrect password";
        }
        if ($msg !== false) {
          echo ('<p style="color: red;">' . htmlentities($msg) . "</p>\n");
        }
      } else if ($result1->rowCount() == 0) {
        echo "User does not exist, please redirect to register <a href=\"register.php\">Sign Up</a>";
      }
    }
  }
  if (isset($_POST['register'])) {
    header('Location: register.php');
    return;
  }


  ?>
  <form method="post">
    <span style="color:red; font-weight:bold;"></span>
    <p>User Name <input type="text" name="uname" id="uname" /></p>
    <p>Password <input type="password" name="pw" id="pw" /></p>
    <button type="submit" class="btn button1" id="login">Log In</button>
    <button type="submit" name="register" class="btn button3">Sign Up</button>
  </form>
</body>

</html>
