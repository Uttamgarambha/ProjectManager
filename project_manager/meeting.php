<?php 

// Connect to MySQL database
$conn = mysqli_connect('localhost', 'root', '', 'project_manager');

$sql = "select * from meeting;";  
$result = $conn->query($sql);
     
?> 

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Meetings</title>
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
     <center> <h1>Meeting List</h1></center>

      <table >
      <thead>
          <tr>
            <th>Meeting ID</th>
            <th>Meeting Title</th>
            <th>Meeting Organizer</th>
            <th>Agenda</th>
            <th>Date & Time</th>
            <th>Duration</th>
            <th>Follow-Up-Date</th>
            <th>Priority</th>
            <th>Metting Status</th>
          
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
      <td><?php echo $row[7]; ?></td>
      <td><?php echo $row[8]; ?></td>
     
      
      <td><form method="post" action="meeting-update.php">
        <input type="hidden" name="id" value="<?php echo $row[0]; ?>"> 
        <button style="background-color:green;color:white;" type="submit" name="update_button">Update</button>
      </form></td>
      <td><form method="post" action="meeting-up-del.php">
        <input type="hidden" name="id" value="<?php echo $row[0]; ?>"> 
        <button style="background-color:red;color:white;" type="submit" name="delete_button">Delete</button>
      </form></td>
      

 
     
  <?php
          }
          ?>
    
            
    </tbody>
     </table>
     <br>
     <center><button style="background-color:skyblue;"><a href="meeting-ins.php">Add Meeting +</a> </button></center>
     </main>
     <footer>
    <div class="container">
      <p>&copy; 2023 Project Management System. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
 
