<!DOCTYPE html>
<html>

<head>
	<meta charset=UTF-8 />

	<title>PHP Quiz</title>

</head>

<body>

	<div id="page-wrap">

		<h1>Result of the Quiz</h1>

        <?php

            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];

            $totalCorrect = 0;

            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "C") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "C") { $totalCorrect++; }
            if ($answer5 == "A") { $totalCorrect++; }

            echo "<div id='results'>$totalCorrect / 5 correct</div>";
						$percent = ($totalCorrect*20);

						if (isset($_POST['save'])){
							$id = $_POST['id'];
			  		header("Location: quizaction.php?id=".urlencode($id)."&quizresult=".urlencode($totalCorrect)."&percentage=".urlencode($percent));
					}
					if (isset($_POST['cancel'])){
						$uname = $_POST['uname'];
						header("Location: home.php?name=".urlencode($uname));
						return;
				}
				?>
				<form method = "POST">
<input type="submit" value="Save Attempt" name="save"/>
<input type="submit" value="Cancel" name="cancel"/>
</form>

	</div>

</body>

</html>
