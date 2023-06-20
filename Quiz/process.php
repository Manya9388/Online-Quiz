<?php
include('config.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Check if the class value is set and not empty
  if (isset($_POST['class']) && !empty($_POST['class'])) {
    $selectedClass = $_POST['class'];
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    echo "Name: $name<br>";
    echo "Roll No: $rollno<br>";

    // Perform an action based on the selected class
    switch ($selectedClass) {
      case '1':
        // Check if the roll number exists in student1 table
        $sql = "SELECT * FROM student1 WHERE rollno = '$rollno'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // Roll number already exists in Class 1. No need to enter again.
          header("Location: view_score1.php?rollno=$rollno");
          exit();
        }

        header("Location: one.php?name=$name&rollno=$rollno");
        exit();
        break;

      case '2':
        $sql = "SELECT * FROM student2 WHERE rollno = '$rollno'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // Roll number already exists in Class 1. No need to enter again.
          header("Location: view_score2.php?rollno=$rollno");
          exit();
        }

        header("Location: two.php?name=$name&rollno=$rollno");
        exit();
        break;

      case '3':
        $sql = "SELECT * FROM student3 WHERE rollno = '$rollno'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // Roll number already exists in Class 1. No need to enter again.
          header("Location: view_score3.php?rollno=$rollno");
          exit();
        }

        header("Location: three.php?name=$name&rollno=$rollno");
        exit();
        break;

      default:
        echo "Invalid class selection.";
        break;
    }
  } else {
    echo "Please select a class.";
  }
}

?>
