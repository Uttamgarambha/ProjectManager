

<?php

$conn = mysqli_connect('localhost', 'root', '', 'project_manager');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  

if(isset($_POST['delete_button'])) {
    $id = $_POST['id']; 
    $query = "DELETE FROM team WHERE id = $id"; 
    mysqli_query($conn, $query); 
    header("location:team.php");
}

if(isset($_POST['update_button'])) {
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form data
        $id             = $_POST['id']; 
        $name            = $_POST['name'];
        $joining_date   = $_POST['joining_date'];
        $position       = $_POST['position']; 
        $gender         = $_POST['gender']; 
        $email          = $_POST['email']; 
        $phone            = $_POST['phone']; 
        $performance     = $_POST['performance']; 
        $salary          = $_POST['salary'];     
        $salary_status  = $_POST['salary_status']; 
      
      
      
        // Update the data in the table
        $sql = "UPDATE team SET 
               
                name =  '$name',
                joining_date = '$joining_date',
                position  ='$position',
                gender   ='$gender',  
                email   =  '$email',
                phone   =   '$phone',
                performance =  '$performance', 
                salary   = '$salary',
                salary_status =  '$salary_status'

                WHERE id = '$id'";
                
        if (mysqli_query($conn, $sql)) {
          header("location: team.php");
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
      }
      
      // Close the connection
      mysqli_close($conn);
}
?>


       