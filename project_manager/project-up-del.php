

<?php

$conn = mysqli_connect('localhost', 'root', '', 'project_manager');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  

if(isset($_POST['delete_button'])) {
    $id = $_POST['id']; // retrieve the id of the record to delete from the form
    $query = "DELETE FROM portfolio WHERE id = $id"; // replace table_name with the actual name of your table
    mysqli_query($conn, $query); // execute the query
    header("location:project.php");
}

if(isset($_POST['update_button'])) {

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
        
      
      
      
        // Update the data in the table
        $sql = "UPDATE portfolio SET project_name = '$project_name',project_manager  =  '$project_manager',client_name  =  '$client_name',client_phone = '$client_phone',start_date = '$start_date',end_date =  '$end_date',status = '$status',priority = '$priority',budget = '$budget',no_of_emp =  '$no_of_employee',resources = '$resources',project_type =  '$project_type',progress = '$progress',issues = '$issues' WHERE id = '$id'";
                
        if (mysqli_query($conn, $sql)) {
          header("location: project.php");
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
      }
      
      // Close the connection
      mysqli_close($conn);
}
?>


       