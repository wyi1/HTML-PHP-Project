<!DOCTYPE html>
<html lang="en">

<html>
<head>


</head>

<meta charset=utf-8 />
    <title>Register</title>
<?
  if ( isset($_POST['uname']) && isset($_POST['pw']) ) {
    if ( strlen($_POST['uname']) < 1 || strlen($_POST['pw']) < 1 ) {
      $msg = "User name and password are required";


    }else{
      header("Location: registeraction.php");

    }
    if ( $msg !== false ) {
      echo("<p style='color: red;'>".htmlentities($msg)." </p> \n");

    }

  }
      ?>
        <body>
        <form method = "POST">
          <h1>Registration</h1>
          <p><label for "uname">Username: <input id="uname" name = "Username" type="text"  /></label></p>
          <p><label for "pw">Password: <input id="pw" name = "Password" type="password"  /></label></p>
            <input type="submit" value="Submit" />
          </form>
        </body>

</html>
