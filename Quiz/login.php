<?php
include('config.php');
// Initialize the error message variable
$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Query to fetch the user from the database
  $sql = "SELECT * FROM login WHERE name = '$username' AND password = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    // User found, redirect to a success page or perform further actions
    header("Location: adminhome.php");
    exit();
  } else {
    // Invalid credentials, set the error message
    $error = "Invalid username or password.";
  }
}


?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <style>
    /* CSS Styles */
    body {
      font-family: Arial, sans-serif;
    }
    
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    
    label {
      font-weight: bold;
    }
    
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 3px;
      margin-bottom: 10px;
    }
    
    button {
      margin-top: 10px;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
    
    button:hover {
      background-color: #45a049;
    }
    
    .error-message {
      color: red;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
 
    <form action="login.php" method="post">
      <label for="username">Username:</label>
      <input type="text" name="username" id="username" required><br>

      <label for="password">Password:</label>
      <input type="password" name="password" id="password" required><br>

      <button type="submit">Login</button>

      <p class="error-message"><?php echo $error; ?></p>
    </form>
  </div>
</body>
</html>

