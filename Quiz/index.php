<!DOCTYPE html>
<html>
<head>
  <title>Class Selection</title>
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
    
    select {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 3px;
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
    .login-button {
      position: absolute;
      top: 20px;
      right: 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 3px;
      padding: 8px 16px;
      cursor: pointer;}
  </style>
</head>
<body>
  <div class="container">
    <h2>Online Quiz Competition</h2>
    <button class="login-button" onclick="location.href='login.php'">Teacher Login</button>
    <form action="process.php" method="post">
  <label for="name">Name:</label>
  <input type="text" name="name" id="name" required><br><br>

  <label for="rollno">Roll No:</label>
  <input type="text" name="rollno" id="rollno" required><br><br>

  <label for="class">Select Class:</label>
  <select name="class" id="class">
    <option value="">-- Select Class --</option>
    <?php
      // Generate options for class selection
      for ($i = 1; $i <= 10; $i++) {
        echo "<option value='$i'>$i</option>";
      }
    ?>
  </select>
  <button type="submit">Submit</button>
</form>

  </div>
</body>

</html>
