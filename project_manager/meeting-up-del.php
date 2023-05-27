

<?php

$conn = mysqli_connect('localhost', 'root', '', 'project_manager');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  

if(isset($_POST['delete_button'])) {
    $id = $_POST['id']; // retrieve the id of the record to delete from the form
    $query = "DELETE FROM meeting WHERE id = $id"; // replace table_name with the actual name of your table
    mysqli_query($conn, $query); // execute the query
    header("location:meeting.php");
}

if(isset($_POST['update_button'])) {
    // $id = $_POST['id']; // retrieve the id of the record to delete from the form
    // $query = "DELETE FROM meeting WHERE id = $id"; // replace table_name with the actual name of your table
    // mysqli_query($conn, $query); // execute the query
    // header("location:meeting-ins.php");


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
      
      
      
        // Update the data in the table
        $sql = "UPDATE meeting SET 
                name = '$name', 
                organizer = '$organizer', 
                agenda = '$agenda', 
                date = '$date', 
                duration = '$duration', 
                follow = '$follow', 
                priority = '$priority', 
                status = '$status' 
                WHERE id = '$id'";
                
        if (mysqli_query($conn, $sql)) {
          header("location: meeting.php");
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
      }
      
      // Close the connection
      mysqli_close($conn);
}
?>


       