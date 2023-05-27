<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      body{
        background:  linear-gradient(to left, #43cea2 , #185a9d);
      }
        #login {
  /* margin-top: 20px; */
margin: auto;
  /* padding: 10px; */
  padding: 50px;
  background-color: #f5f5f5;
  border: 1px solid #ddd;
  background: 
    linear-gradient(to right, #43cea2, #136a8a);
  box-shadow: 
    0px 2px 10px rgba(0,0,0,0.2), 
    0px 10px 20px rgba(0,0,0,0.3), 
    0px 30px 60px 1px rgba(0,0,0,0.5);
    width: 200px;
    margin-top: 10%;
    border-radius: 18px;
    height: 300px;
    /* min-height: 90vh; */
}

#login h2 {
  align-items: center;
  justify-content: center;
  display: flex;
  font-size: 30px;
  margin-bottom: 10px;
}

#login form {
  display: flex;
  box-shadow: 0px 2px 0px 0px white;

  flex-direction: column;
  /* align-items: center; */
}

#login label {
  margin: 5px;
  font-size: large;
  font-weight:500;
  color: white;
}

#login input[type="text"],
#login input[type="password"] {
  padding: 6px;
  border: 1px solid #ccc;
  border-radius: 5px;
  
}

#login button[type="submit"] {
  margin-top: 10px;
  padding: 7px 10px;
  background-color: #333;
  color: #fff;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  width: 70px;

}

#login button[type="submit"]:hover {
  background-color: #827979;
}
a{
  margin: 5px 40px 15px 0px;
  padding-left: 50px;
  color: #c2b9b9;
  align-items: end;
}
a:hover{
  color: #fff;
}

    </style>
    <title>Login Page</title>
</head>
<body>
    <section id="login">
        <h2>Login</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>
      
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
      <br>
          <button type="submit">Login</button>
          <br>
          <a href="registration.html">
            Register yourself
       </a>
        </form>
        
      </section>

      
      
</body>
</html>


<?php
// Initialize variables
$username = "";
$password = "";
$errors = array();

// Connect to MySQL database
$db = mysqli_connect('localhost', 'root', '', 'project_manager');



  // Collect form data
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  // Validate form data
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }

  // If there are no errors, log in the user
  if (count($errors) == 0) {
    // $password = password_verify($password); // decrypt password before comparing with database
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($db, $query);
    if (!empty($errors))
{
  echo "<div class='error'>Please fix the following errors:\n<ul>";
	foreach ($errors as $error)
	echo "<li>$error</li>\n";

	echo "</ul></div>";
}
  


    if (mysqli_num_rows($result) == 1) { // If user is found
      $_SESSION['username'] = $username; // Set session variable
      header('location: project.php'); // Redirect to inventory page
    } else {
      header('location: registration.html');
    }
  }
}

?>


