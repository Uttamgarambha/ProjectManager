<?php
// Make a database connection
$servername = "localhost"; // replace with your database server name
$username = "root"; // replace with your database username
$password = ""; // replace with your database password
$dbname = "project_manager"; // replace with your database name

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
  $organizer     = $_POST['organizer'];
  $agenda        = $_POST['agenda']; 
  $date          = $_POST['date']; 
  $duration      = $_POST['duration']; 
  $follow        = $_POST['follow']; 
  $priority       = $_POST['priority'];     
  $status         = $_POST['status']; 
      
  
  
  // Insert the data into the table
  $sql = "INSERT INTO meeting  VALUES ('$id', '$name','$organizer',
  '$agenda','$date',
  '$duration','$follow','$priority','$status')";
  if (mysqli_query($conn, $sql)) {
    header("location:meeting.php");
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
    <title>Insert Meeting Data</title>
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
    height: 900px;
margin-top:5% ;
  border: 1px solid #ddd;
  border-radius: 18px;
  box-shadow: 0px 2px 0px 0px white;

  
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
        <h1>Insert Meeting Data</h1>
   



    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="id">Meeting ID:</label>
    <input type="number" id="id" name="id"><br><br>
    
    <label for="projectName">Meeting Title:</label>
    <input type="text" id="projectName" name="name"><br><br>
    
    <label for="projectManager">Meeting Organizer:</label>
    <input type="text" id="projectManager" name="organizer"><br><br>
    
    <label for="clientName">Agenda:</label>
    <input type="text" id="clientName" name="agenda"><br><br>
    
    <label for="clientPhone">Date & Time:</label>
    <input type="date" id="clientPhone" name="date"><br><br>
    
    <label for="startDate">Duration:</label>
    <input type="text" id="startDate" name="duration"><br><br>
    
    <label for="endDate">Follow-Up-Date:</label>
    <input type="date" id="endDate" name="follow"><br><br>
    
    <label for="priority">Priority:</label>
    <!-- <input type="text" id="priority" name="priority"><br><br> -->
    <select id="priority" name="priority">
    <option value="High">High</option>
    <option value="Medium">Mediun</option>
    <option value="Low">Low</option>
    </select>

    <label for="status">Meeting Status:</label>
    <!-- <input type="text" id="status" name="status"><br><br> -->
    <select id="status" name="status">
    <option value="Schedule">Scheduled</option>
    <option value="Completed">Completed</option>
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

