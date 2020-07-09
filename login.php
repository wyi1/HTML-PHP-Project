<!DOCTYPE html>
<html lang="en">

<html>
<head>


</head>

<meta charset=utf-8 />
    <title>Login</title>

        <body>
        <form method = "POST" action="loginaction.php">
          <h1>Login to Play</h1>
          <?php
          $salt = 'XyZzy12*_';
          $stored_hash = '1a52e17fa899cf40fb04cfc42e6352f1';
          $md5 = hash('md5', 'XyZzy12*_php123');

          if ( isset($_POST['uname']) && isset($_POST['pw']) ) {
              if ( strlen($_POST['uname']) < 1 || strlen($_POST['pw']) < 1 ) {
                $msg = "User name and password are required";
                } else {
                  $check = hash('md5', $salt.$_POST['pw']);
                    if ( $check == $stored_hash ) {
                      header("Location: quiz.php?name=".urlencode($_POST['uname']));
                      return;
                    } else {
                      $msg = "Incorrect password";
                    }
                }

                if ( $msg !== false ) {
                  echo('<p style="color: red;">'.htmlentities($msg)."</p>\n");
        }
        }
        if ( isset($_POST['register']) ) {
         header('Location: register.php');
         return;
        }
           ?>
           <form method="post">
             <p>User Name <input type="text" name="uname"/></p>
              <p>Password <input type="password" name="pw"/></p>
             <p><button type="submit">Log In</button><button type="button" name="register">Sign Up/button></p>
           </form>
        </body>
        </html>
