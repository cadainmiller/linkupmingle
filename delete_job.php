
<?php
// Include config file
require_once "includes\config.php";

$id=$_REQUEST['id'];

$query = "DELETE FROM job WHERE job_id = $id"; 


if(mysqli_query($link, $query)){
    echo "Records were deleted successfully.";
    header("Location: my_jobs.php");
} else {
    echo "ERROR: Could not able to execute $query. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

//header("Location: my_jobs.php"); 
?>