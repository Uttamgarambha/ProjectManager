<?php 

// Connect to MySQL database
$conn = mysqli_connect('localhost', 'root', '', 'project_manager');

if(isset($_POST['update_button'])) {
    $id = $_POST['id']; 

    $sql = "select * from team where id='$id'";  
    $result = $conn->query($sql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee Data</title>
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
    height: 1000px;
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
        <h1>Update Employee Data</h1>
   

        <?php
          while($row = $result->fetch_row()){
          
      ?>

<form method="post" action="team-up-del.php">
    <label for="id">Employee ID:</label>
    <input type="number" id="id" name="id" value="<?php echo $row[0]; ?>"><br><br>
    
    <label for="projectName">Employee Name:</label>
    <input type="text" id="projectName" name="name" value="<?php echo $row[1]; ?>"><br><br>
    
    <label for="projectManager">Joining Date:</label>
    <input type="date" id="projectManager" name="joining_date" value="<?php echo $row[2]; ?>"><br><br>
    
    <label for="clientName">Position:</label>
    <input type="text" id="clientName" name="position" value="<?php echo $row[3]; ?>"><br><br>

    <label for="clientName">Gender :&nbsp;&nbsp;&nbsp;</label>
    <label for="male">Male</label>
    <input type="radio" name="gender" id="male" value="male" value="<?php echo $row[4]; ?>">

    <label for="female">Female</label>
    <input type="radio" name="gender" id="female" value="female" value="<?php echo $row[4]; ?>">
    <br>
    <br>
    
    <label for="clientPhone">E-mail ID:</label>
    <input type="email" id="clientPhone" name="email" value="<?php echo $row[5]; ?>"><br><br>
    
    <label for="startDate">Phone no.:</label>
    <input type="number" id="startDate" name="phone" value="<?php echo $row[6]; ?>"><br><br>
    
    <label for="endDate">Performance Level(%):</label>
    <input type="number" id="endDate" name="performance" value="<?php echo $row[7]; ?>"><br><br>
    
    <label for="endDate">Salary:</label>
    <input type="number" id="endDate" name="salary" value="<?php echo $row[8]; ?>"><br><br>

    <label for="status">Salary Status:</label>
    <!-- <input type="text" id="status" name="status"><br><br> -->
    <select id="status" name="salary_status" value="<?php echo $row[9]; ?>">
    <option value="Paid">Paid</option>
    <option value="Pending">Pending</option>
    <option value="Canceled">Canceled</option>
</select>

    <button type="submit"  name="update_button">Update</button>
    &nbsp;&nbsp;
    <button type="reset">Reset</button>
    
    </form>
    <?php
          }
        }
          ?>
    </section>
</body>
</html>
<!-- HTML form to get the data from user -->
