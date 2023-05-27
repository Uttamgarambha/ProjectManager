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
  $id             = $_POST['id']; 
  $name          = $_POST['name'];
  $joining_date     = $_POST['joining_date'];
  $position       = $_POST['position']; 
  $gender       = $_POST['gender']; 
  $email      = $_POST['email']; 
  $phone      = $_POST['phone']; 
  $performance        = $_POST['performance']; 
  $salary       = $_POST['salary'];     
  $salary_status         = $_POST['salary_status']; 
      
  
  
  // Insert the data into the table
  $sql = "INSERT INTO team  VALUES ('$id', '$name','$joining_date',
  '$position','$gender','$email',
  '$phone','$performance','$salary','$salary_status')";
  if (mysqli_query($conn, $sql)) {
    header("location:team.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

// Close the connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Employee Data</title>
    <style>
       body{
        background:linear-gradient(to left, #43cea2 , #185a9d);;

        
      }
    #registration {
      margin:auto;
  padding: 50px;
  
  /* background-color: #f5f5f5; */
  background: 
  linear-gradient(to right, #43cea2, #136a8a);
  box-shadow: 
    0px 2px 10px rgba(0,0,0,0.2), 
    0px 10px 20px rgba(0,0,0,0.3), 
    0px 30px 60px 1px rgba(0,0,0,0.5);
    width: 600px;
    height: 950px;
margin-top:5% ;
  border: 1px solid #ddd;
  border-radius: 18px;
  
}

#registration h1 {
  align-items: center;
  justify-content: center;
  display: flex;
  font-size: 30px;
  margin-bottom: 10px;
  padding-bottom: 10px;
}




#registration button[type="submit"] {
  margin-top: 10px;
  padding: 7px 10px;
  background-color: #333;
  color: #fff;
  border: none;
  border-radius: 5px;
  margin-left:70px;

  cursor: pointer;
  width: 80px;
  

}

#registration button[type="submit"]:hover {
  background-color: #c2afaf;
}
#registration button[type="reset"] {
  margin-top: 10px;
  padding: 7px 10px;
  background-color: #333;
  color: #fff;
  border: none;
  border-radius: 5px;
  width: 80px;
  cursor: pointer;
  

}

#registration button[type="reset"]:hover {
  background-color: #c2afaf;
}
    
form {
  max-width: 500px;
  margin: 0 auto;
}

label {
  display: inline-block;
  margin-bottom: 10px;
 
  color:white;
}

input[type="text"],
input[type="date"],
input[type="number"],
input[type="email"],
select,
textarea {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-bottom: 10px;
}

textarea {
  height: 100px;
}




 
</style>  
</head>
<body>

    <section id="registration">
        <h1>Insert Employee Data</h1>
   



    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="id">Employee ID:</label>
    <input type="number" id="id" name="id"><br><br>
    
    <label for="projectName">Employee Name:</label>
    <input type="text" id="projectName" name="name"><br><br>
    
    <label for="projectManager">Joining Date:</label>
    <input type="date" id="projectManager" name="joining_date"><br><br>
    
    <label for="clientName">Position:</label>
    <input type="text" id="clientName" name="position"><br><br>

    <label for="clientName">Gender :&nbsp;&nbsp;&nbsp;</label>
    <label for="male">Male</label>
    <input type="radio" name="gender" id="male" value="male">

    <label for="female">Female</label>
    <input type="radio" name="gender" id="female" value="female">
    <br>
    <br>
    
    <label for="clientPhone">E-mail ID:</label>
    <input type="email" id="clientPhone" name="email"><br><br>
    
    <label for="startDate">Phone no.:</label>
    <input type="number" id="startDate" name="phone"><br><br>
    
    <label for="endDate">Performance Level(%):</label>
    <input type="number" id="endDate" name="performance"><br><br>
    
    <label for="endDate">Salary:</label>
    <input type="number" id="endDate" name="salary"><br><br>

    <label for="status">Salary Status:</label>
    <!-- <input type="text" id="status" name="status"><br><br> -->
    <select id="status" name="salary_status">
    <option value="Paid">Paid</option>
    <option value="Pending">Pending</option>
    <option value="Canceled">Canceled</option>
</select>

    <button type="submit">Add Data</button>
    &nbsp;&nbsp;
    <button type="reset">Reset</button>
    
    </form>
    </section>
</body>
</html>
<!-- HTML form to get the data from user -->

