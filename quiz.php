<!DOCTYPE html>

<head>
  <meta charset=UTF-8 />
  <title>SSE3150 Quiz</title>
  <link rel='stylesheet' type='text/css' href='style.css'>
</head>

<body>
  <div id="page-wrap">
    <h1>Simple Quiz Built On PHP</h1>
    <form id="myForm" method="POST" action="result.php">
      <input type="hidden" name="uname" value="<?php echo $_REQUEST['name'] ?>">
      <input type="hidden" name="id" value="<?php echo $_REQUEST['id'] ?>">
      <ol>
        <li>
          <h3>What is Dr. Koh's full name?</h3>

          <div>
            <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" required="required"/>
            <label for="question-1-answers-A">KOH SIEW HUA</label>
          </div>

          <div>
            <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
            <label for="question-1-answers-B">KOH TIENG WEI</label>
          </div>

          <div>
            <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
            <label for="question-1-answers-C">KOH MEI LI</label>
          </div>

        </li>

        <li>
          <h3>Why do Dr. teach us?</h3>

          <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" required="required"/>
            <label for="question-2-answers-A">Because he get paid a lot of money.</label>
          </div>

          <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
            <label for="question-2-answers-B">Because he likes to holiday.</label>
          </div>

          <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
            <label for="question-2-answers-C">Because he loves the students he teaches.</label>
          </div>

        </li>

        <li>
          <h3>Is Dr Koh handsome?</h3>

          <div>
            <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" required="required"/>
            <label for="question-1-answers-A">Yes</label>
          </div>

          <div>
            <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
            <label for="question-3-answers-B">No</label>
          </div>

          <div>
            <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
            <label for="question-3-answers-C">Maybe</label>
          </div>

        </li>

        <li>
          <h3>Which software is using during class?</h3>

          <div>
            <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" required="required"/>
            <label for="question-4-answers-A">Google Meet</label>
          </div>

          <div>
            <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
            <label for="question-4-answers-B">Zoom Meeting</label>
          </div>

          <div>
            <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
            <label for="question-4-answers-C">Cisco Webex Meeting</label>
          </div>

        </li>

        <li>
          <h3>Where did Dr. upload the lectures' recording?</h3>

          <div>
            <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" required="required"/>
            <label for="question-5-answers-A">Google Drive</label>
          </div>

          <div>
            <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
            <label for="question-5-answers-B">Youtube</label>
          </div>

          <div>
            <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
            <label for="question-5-answers-C">Facebook</label>
          </div>

        </li>

      </ol>

      <input class="btn button1" type="submit" value="Submit" name="submit" />
    </form>
    <span></span>
  </div>


</body>

</html>

<!-- <!DOCTYPE html>
<html>

<head>
  
  <script>
    alert('LOL');
    $(document).ready(function() {
      $("button").click(function() {
        $("p").hide();
      });
    });
  </script>
</head>

<body>

  <h2>This is a heading</h2>

  <p>This is a paragraph.</p>
  <p>This is another paragraph.</p>

  <button>Click me to hide paragraphs</button>

</body>

</html> -->