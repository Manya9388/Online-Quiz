<html>
<head>
  <style>
    body {
      background-color: #f1f1f1;
      text-align: center;
    }
    .form-container {
      background-color: #fff;
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      margin-top: 50px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }
    .form-container input[type="text"],
    .form-container input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }
    .form-container input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      cursor: pointer;
    }
    .timer {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .question-container {
      display: none;
    }
    .active {
      display: block;
    }
    .button-container {
      display: flex;
      justify-content: space-between;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <?php
      $name = $_GET["name"];
      $rollno = $_GET["rollno"];
      echo "Name: $name<br>";
      echo "Roll No: $rollno<br>";
      echo "Class 2";

      // Display the form for Class 2
      echo "<form id='quizForm2' method='post' action='three3.php'>";
      echo "<div class='question-container active'>";
      echo "<p>Question 1: What is 14 + 15 ?</p>";
      echo "<input type='text' name='q1'><br>";
      echo "</div>";
      echo "<div class='question-container'>";
      echo "<p>Question 2: What is 15 + 19 ?</p>";
      echo "<input type='text' name='q2'><br>";
      echo "</div>";
      echo "<div class='question-container'>";
      echo "<p>Question 3: What is 13 + 15 ?</p>";
      echo "<input type='text' name='q3'><br>";
      echo "</div>";
      echo "<div class='question-container'>";
      echo "<p>Question 4: What is 15 + 15 ?</p>";
      echo "<input type='text' name='q4'><br>";
      echo "</div>";
      echo "<div class='question-container'>";
      echo "<p>Question 5: What is 17 + 14 ?</p>";
      echo "<input type='text' name='q5'><br>";
      echo "</div>";
      echo "<input type='hidden' name='class' value='2'>";
      echo "<input type='hidden' name='name' value='$name'>";
      echo "<input type='hidden' name='rollno' value='$rollno'>";
      echo "<div class='button-container'>";
      echo "<button type='button' id='nextBtn' onclick='showNextQuestion()'>Next</button>";
      echo "<input type='submit' value='Submit' id='submitBtn' style='display: none;'>";
      echo "</div>";
      echo "</form>";
    ?>
    <div class="timer" id="timer">2:00</div>

    <script>
      var timeLimit = 120;
      var currentQuestion = 0;
      var questionContainers = document.getElementsByClassName("question-container");
      var nextBtn = document.getElementById("nextBtn");
      var submitBtn = document.getElementById("submitBtn");
      var quizForm = document.getElementById("quizForm2");

      function showNextQuestion() {
        questionContainers[currentQuestion].classList.remove("active");
        currentQuestion++;
        if (currentQuestion < questionContainers.length) {
          questionContainers[currentQuestion].classList.add("active");
        } else {
          nextBtn.style.display = "none";
          submitBtn.style.display = "block";
        }
      }

      var timerElement = document.getElementById("timer");

      function startTimer() {
        var minutes, seconds;

        var timer = setInterval(function () {
          minutes = Math.floor(timeLimit / 60);
          seconds = timeLimit % 60;

          minutes = minutes < 10 ? "0" + minutes : minutes;
          seconds = seconds < 10 ? "0" + seconds : seconds;

          timerElement.textContent = minutes + ":" + seconds;

          if (timeLimit <= 0) {
            clearInterval(timer);
            timerElement.textContent = "Time's up!";
            quizForm.submit();
          }

          timeLimit--;
        }, 1000);
      }

      window.onload = startTimer;
    </script>

  </div>
</body>
</html>
