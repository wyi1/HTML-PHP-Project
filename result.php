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

				?>
				<form method = "POST" action = "quizaction.php">
					<input type="hidden" name="uname" value="<?php echo $_POST['uname'] ?>">
					<input type="hidden" name="id" value="<?php echo $_POST['id'] ?>">
					<input type="hidden" name="quizresult" value="<?php echo $totalCorrect ?>">
					<input type="hidden" name="percentage" value="<?php echo $percent ?>">
					<input type="submit" value="Save Attempt" name="save"/>
				</form>
				<form method="GET" action="home.php">
					<input type="hidden" name="name" value="<?php echo $_POST['uname'] ?>">
					<input type="submit" value="Cancel" name="cancel"/>
				</form>
	</div>

</body>

</html>
