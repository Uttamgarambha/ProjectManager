<?php
// Make a database connection
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "project_manager"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// If the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  
  $name   = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
      
  
  
  // Insert the data into the table
  $sql = "INSERT INTO conatct_us  VALUES ( '$name','$email','$message')";
  if (mysqli_query($conn, $sql)) {
    header("location:pms.html");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

// Close the connection
mysqli_close($conn);
?>