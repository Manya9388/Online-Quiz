<?php
include('config.php');
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }

        .result-box {
            width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f5f5f5;
            text-align: center;
        }

        .result-box h2 {
            margin-top: 0;
        }

        .result-box p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        // Retrieve the roll number from the URL query parameter
        $rollno = $_GET['rollno'];

        // Retrieve the student's scores from the database
        $sql = "SELECT name,q1, q2, q3, q4, q5 FROM student2 WHERE rollno = '$rollno'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $totalMarks = 0;
            $correctCount = 0;
            $wrongCount = 0;

            // Fetch the row containing the scores
            $row = $result->fetch_assoc();
            $name = $row['name'];
            // Define the correct answers
            $correctAnswers = array(
                'q1' => 19,
                'q2' => 24,
                'q3' => 18,
                'q4' => 20,
                'q5' => 21
            );

            // Compare each answer and add marks for correct ones
            foreach ($correctAnswers as $question => $correctAnswer) {
                $studentAnswer = $row[$question];

                // Check if the student's answer matches the correct answer
                if ($studentAnswer == $correctAnswer) {
                    // Add a mark for each correct answer
                    $totalMarks++;
                    $correctCount++;
                } else {
                    $wrongCount++;
                }
            }

            $totalQuestions = count($correctAnswers);
            $percentage = ($totalMarks / $totalQuestions) * 100;

            // Update the 'mark' column in the 'student2' table with the calculated total marks
            $updateSql = "UPDATE student2 SET mark = '$totalMarks' WHERE rollno = '$rollno'";
            if ($conn->query($updateSql) === TRUE) {
                echo "<div class='result-box'>";
                echo "<h2>Exam Result</h2>";
                echo "<p><b> Hi </h3>".$name.",</b></p>";
                echo "<p>Total Marks: " . $totalMarks . "</p>";
                echo "<p>Correct Answers: " . $correctCount . "</p>";
                echo "<p>Wrong Answers: " . $wrongCount . "</p>";
                echo "<p>Percentage: " . $percentage . "%</p>";
                echo "<p><a href='index.php'>Go back to Home</a></p>";
                echo "</div>";
            } else {
                echo "Error updating mark: " . $conn->error;
            }
        } else {
            echo "No scores found for the given roll number.";
        }
    }
    ?>
</body>
</html>
