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
  $project_name   = $_POST['projectName'];
  $project_manager= $_POST['projectManager'];
  $client_name    = $_POST['clientName']; 
  $client_phone   = $_POST['clientPhone']; 
  $start_date     = $_POST['startDate']; 
  $end_date       = $_POST['endDate']; 
  $status         = $_POST['status']; 
  $priority       = $_POST['priority'];     
  $budget         = $_POST['budget'];     
  $no_of_employee = $_POST['numOfEmployee'];         
  $resources      = $_POST['resources'];     
  $project_type   = $_POST['projectType'];     
  $progress       = $_POST['progress'];         
  $issues         = $_POST['issues'];     
  
  
  // Insert the data into the table
  $sql = "INSERT INTO portfolio  VALUES ('$id', '$project_name','$project_manager',
  '$client_name','$client_phone',
  '$start_date','$end_date','$status','$priority','$budget','$no_of_employee','$resources','$project_type','$progress','$issues')";
  if (mysqli_query($conn, $sql)) {
    header("location:project.php");
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
    <title>Insert Project Data</title>
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
    height: 1700px;
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
        <h1>Insert Project Data</h1>
   



    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="id">Project ID:</label>
    <input type="number" id="id" name="id"><br><br>
    
    <label for="projectName">Project Name:</label>
    <input type="text" id="projectName" name="projectName"><br><br>
    
    <label for="projectManager">Project Manager:</label>
    <input type="text" id="projectManager" name="projectManager"><br><br>
    
    <label for="clientName">Client Name:</label>
    <input type="text" id="clientName" name="clientName"><br><br>
    
    <label for="clientPhone">Client Phone:</label>
    <input type="text" id="clientPhone" name="clientPhone"><br><br>
    
    <label for="startDate">Start Date:</label>
    <input type="date" id="startDate" name="startDate"><br><br>
    
    <label for="endDate">End Date:</label>
    <input type="date" id="endDate" name="endDate"><br><br>
    
    <label for="status">Status:</label>
    <!-- <input type="text" id="status" name="status"><br><br> -->
    <select id="status" name="status">
    <option value="In Progress">In Progress</option>
    <option value="Completed">Completed</option>
    <option value="On Hold">On Hold</option>
    <option value="Canceled">Canceled</option>
</select>

    
    <label for="priority">Priority:</label>
    <!-- <input type="text" id="priority" name="priority"><br><br> -->
    <select id="priority" name="priority">
    <option value="high">High</option>
    <option value="medium">Mediun</option>
    <option value="low">Low</option>
   
</select>
    
    <label for="budget">Budget:</label>
    <input type="text" id="budget" name="budget"><br><br>
    
    <label for="numOfEmployee">No. Of Employee:</label>
    <input type="number" id="numOfEmployee" name="numOfEmployee"><br><br>
    
    <label for="resources">Resources:</label>
    <input type="text" id="resources" name="resources"><br><br>
    
    <label for="projectType">Project Type:</label>
    <input type="text" id="projectType" name="projectType"><br><br>
    
    <label for="progress">Progress(%):</label>
    <input type="number" id="progress" name="progress"><br><br>
    
    <label for="issues">Issues:</label>
    <textarea id="issues" name="issues"></textarea><br><br>
  

    
    <button type="submit">Add Data</button>
    &nbsp;&nbsp;
    <button type="reset">Reset</button>
    
    </form>
    </section>
</body>
</html>
<!-- HTML form to get the data from user -->

