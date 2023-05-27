<?php 

// Connect to MySQL database
$conn = mysqli_connect('localhost', 'root', '', 'project_manager');

$sql = "select * from team;";  
$result = $conn->query($sql);
     
?> 

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>team</title>
    <link rel="stylesheet" href="styles.css">
    <style> 
      body{
      margin: 0;
      padding: 0;
      }
      main{
        max-width:1300px;
        
      }
      
        button{

            border-radius:10px;
            height:30px;
        }
        </style>
  </head>
  
  <body>
  <header>
    <div class="container1">
      <nav>
      <ul>
          <li><a href="pms.html">Home</a></li>
          <li><a href="project.php">Projects</a></li>
          <li><a href="team.php">Team</a></li>
          <li><a href="meeting.php">Meetings</a></li>
          <li><a href="pms.html">Log Out</a></li>
        </ul>
      </nav>
    </div>
  </header>
    <main>
     <center> <h1>Employee List</h1></center>

      <table >
      <thead>
          <tr>
            <th>Emp.ID</th>
            <th>Employee Name</th>
            <th>Joining Date</th>
            <th>Position</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Performance</th>
            <th>Salary</th>
            <th>Salary Status</th>
          
            <th>Update</th>
            <th>Delete</th>
          </tr>
        </thead>
    <tbody>

      <?php
          while($row = $result->fetch_row()){
         

         
          
      ?>

      <tr>

      <td><?php echo $row[0]; ?></td>
      <td><?php echo $row[1]; ?></td>
      <td><?php echo $row[2]; ?></td>
      <td><?php echo $row[3]; ?></td>
      <td><?php echo $row[4]; ?></td>
      <td><?php echo $row[5]; ?></td>
      <td><?php echo $row[6]; ?></td>
      <td><?php echo $row[7]; ?>%</td>
      <td><?php echo $row[8]; ?></td>
      <td><?php echo $row[9]; ?></td>
     
      
      <td><form method="post" action="team-update.php">
        <input type="hidden" name="id" value="<?php echo $row[0]; ?>"> 
        <button style="background-color:green;color:white;" type="submit" name="update_button">Update</button>
      </form></td>
      <td><form method="post" action="team-up-del.php">
        <input type="hidden" name="id" value="<?php echo $row[0]; ?>"> 
        <button style="background-color:red;color:white;" type="submit" name="delete_button">Delete</button>
      </form></td>
          </tr>
      

 
     
  <?php
          }
          ?>
    
            
    </tbody>
     </table>
     <br>
     <center><button style="background-color:skyblue;"><a href="team-ins.php">Add Employee +</a> </button></center>
     </main>
     <footer>
    <div class="container">
      <p>&copy; 2023 Project Management System. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
 
