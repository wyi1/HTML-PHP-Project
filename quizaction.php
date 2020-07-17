<?php
$id = $_REQUEST["id"];
$uname = $_POST["uname"];
$quizresult = $_POST["quizresult"];
$percentage = $_POST["percentage"];

include 'db_connection.php';
$conn = OpenCon();
// $pdo=new PDO('mysql:host=localhost;port=3306;dbname=project',
//      'root', '1234');
$stmt = $conn->prepare("INSERT INTO quiz_result (id,quizresult,percent)
     VALUES (:id, :quizresult, :percentage)");
$stmt->bindParam(':id', $id);
$stmt->bindParam(':quizresult', $quizresult);
$stmt->bindParam(':percentage', $percentage);
$stmt->execute();

echo "Succesfully registered. ";
// Please head to <a href='home.php?name=$uname'>Home</a> or <a href='login.php'>Logout</a>
?>
<?php
function custom_scripts()
{

}
?>

<html>
   <head>
      <title>Save Result</title>
      <script type = "text/javascript"
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>

      <script type = "text/javascript" language = "javascript">
        $(document).ready(function(){
          setTimeout(function() {
           window.location.href = "home.php?name=<?php echo $uname ?>"
          }, 3000);
        });
      </script>
   </head>

   <body>
      <p>Redirecting to Home in 3 seconds. </p>
      <p>Click <a href='home.php?name=$uname'>here</a> if you are not redirected. </p>

   </body>
</html>
