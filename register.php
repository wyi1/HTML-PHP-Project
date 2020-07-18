<!DOCTYPE html>
<html lang="en">

<html>

<head>
  <link rel='stylesheet' type='text/css' href='style.css'>
  <script>
    function goBack() {
      window.location.href = "login.php";
    }
  </script>
</head>

<meta charset=utf-8 />
<title>Register</title>

<style>
h1{
  font-family: serif;
  color: #CD5C5C;
}

.header img {
  float: center;
  width: 100px;
  height: 100px;
  background: #FFE4E1;
}

.header h1 {
  position: center;
  top: 20px;
  left: 15px;
}

body{
  background-color: #FFE4E1;
  text-align: center;
  font-family: sans-serif;
  color: #E9967A;
}

</style>

<body>
  <form method="POST">
    <div class="header">
      <img src="https://media.giphy.com/media/5jUAT1pNAgRfc3Ev4M/giphy.gif" alt="logo" />
    <h1>Registration</h1>
    </div>
    <?php
    if (isset($_POST['uname']) && isset($_POST['pw'])) {
      $uname = $_POST['uname'];
      $pw = $_POST['pw'];
      if (strlen($_POST['uname']) < 1 || strlen($_POST['pw']) < 1) {
        $msg = "User name and password are required";
      } else {
        header("Location: registeraction.php");
        session_start();
        $_SESSION['uname'] = $uname;
        $_SESSION['pw'] = $pw;
      }
      if ($msg !== false) {
        echo ('<p style="color: #C71585;">' . htmlentities($msg) . "</p>\n");
      }
    }


    ?>

    <p><label for "uname">Username: <input name="uname" type="text" /></label></p>
    <p><label for "pw">Password: <input name="pw" type="password" /></label></p>
    <input type="submit" value="Submit" class="btn button4" />
    <button type="button" class="btn button3" onclick="goBack()">Back</button>
  </form>
</body>

</html>
