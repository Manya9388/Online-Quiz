<?php
// Include the config.php file that contains the database credentials
include 'config.php';



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data
  $class = $_POST['class'];
  $name = $_POST['name'];
  $rollno = $_POST['rollno'];
  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];
  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];

  // Insert the data into the database
  $sql = "INSERT INTO student1 (class, name, rollno, q1, q2, q3, q4, q5, mark)
          VALUES ('$class', '$name', '$rollno', '$q1', '$q2', '$q3', '$q4', '$q5',0)";

  if ($conn->query($sql) === TRUE) {
    echo "Answered successfully.";
    echo "<a href='view_score1.php?rollno=$rollno'>View Score</a>";
  } else {
    echo "Error storing data: " . $conn->error;
  }
}


?>
