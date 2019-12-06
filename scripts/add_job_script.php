<?php
// Include config file
require_once "includes\config.php";
 
// Define variables and initialize with empty values
 $job_id = $job_title = $date_posted = $job_due = $job_save = "";
 $job_id_err = $job_title_err = $date_posted_err = $job_due_err = $job_save_err = "";
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    

    // Create ID for jobs
    $job_id = mt_rand();

    //Create date posted
    $date_posted = date("d/m/Y");
   

    // Validate first name
    if(empty(trim($_POST["job_title"]))){
        $job_title_err = "Please enter job title.";
    } else {
        $job_title = trim($_POST["job_title"]);
    }


    // Validate middle name
    if(empty(trim($_POST["job_due"]))){
        $job_due_err = "Please due date.";
    } else {
        $job_due = trim($_POST["job_due"]);
    }

    
    
    // Check input errors before inserting in database
    if(empty($job_title_err) && empty($job_due_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO job (job_id, job_title, date_posted, date_due) VALUES (?,?,?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_job_id, $param_job_title ,$param_date_posted, $param_date_due);
            
            // Set parameters
            $param_job_id = $job_id;
            $param_job_title = $job_title;
            $param_date_posted = $date_posted;
            $param_date_due = $job_due;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                //header("location: ");
                $job_save = "Job Posted";
            } else{
                echo "Something went wrong. Please try again later. (Datebase)"; 
            }
            
        }         
        // Close statement
        mysqli_stmt_close($stmt);  
    }
    
    // Close connection
    mysqli_close($link);
}

?>