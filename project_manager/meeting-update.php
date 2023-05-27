<?php 

// Connect to MySQL database
$conn = mysqli_connect('localhost', 'root', '', 'project_manager');

if(isset($_POST['update_button'])) {
    $id = $_POST['id']; 

    $sql = "select * from meeting where id='$id'";  
    $result = $conn->query($sql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Meeting Data</title>
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
        <h1>Update Meeting Data</h1>
   

        <?php
          while($row = $result->fetch_row()){
          
      ?>

    <form method="post" action="meeting-up-del.php">

    


    <label for="id">Meeting ID:</label>
    <input type="number" id="id" name="id" value="<?php echo $row[0]; ?>"><br><br>
    
    <label for="projectName">Meeting Title:</label>
    <input type="text" id="projectName" name="name" value="<?php echo $row[1]; ?>"><br><br>
    
    <label for="projectManager">Meeting Organizer:</label>
    <input type="text" id="projectManager" name="organizer" value="<?php echo $row[2]; ?>"><br><br>
    
    <label for="clientName">Agenda:</label>
    <input type="text" id="clientName" name="agenda" value="<?php echo $row[3]; ?>"><br><br>
    
    <label for="clientPhone">Date & Time:</label>
    <input type="date" id="clientPhone" name="date" value="<?php echo $row[4]; ?>"><br><br>
    
    <label for="startDate">Duration:</label>
    <input type="text" id="startDate" name="duration" value="<?php echo $row[5]; ?>"><br><br>
    
    <label for="endDate">Follow-Up-Date:</label>
    <input type="date" id="endDate" name="follow" value="<?php echo $row[6]; ?>"><br><br>
    
    <label for="priority">Priority:</label>
    <!-- <input type="text" id="priority" name="priority"><br><br> -->
    <select id="priority" name="priority" value="<?php echo $row[7]; ?>">
    <option value="High">High</option>
    <option value="Medium">Mediun</option>
    <option value="Low">Low</option>
    </select>

    <label for="status">Meeting Status:</label>
    <!-- <input type="text" id="status" name="status"><br><br> -->
    <select id="status" name="status" value="<?php echo $row[8]; ?>">
    <option value="Schedule">Scheduled</option>
    <option value="Completed">Completed</option>
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
