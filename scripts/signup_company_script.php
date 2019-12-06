<?php
// Initialize the session
session_start();

// Include config file
require_once "includes\config.php";
 
// Define variables and initialize with empty values
 $c_name = $email = $p_number = $skillarea = $parish = $photo = $city = $password = $confirm_password = "";
 $c_name_err = $email_err = $p_number_err = $skillarea_err = $photo_err = $parish_err = $city_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email address.";
    } else{
        // Prepare a select statement
        $sql = "SELECT applicant_id FROM applicant WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]); 
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email address is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            // Close statement
            mysqli_stmt_close($stmt);
            }
        }     
        
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Validate first name
    if(empty(trim($_POST["c_name"]))){
        $c_name_err = "Please enter your company name.";
    } else {
        $c_name = trim($_POST["c_name"]);
    }

    // Validate phone number
    if(empty(trim($_POST["p_number"]))){
        $p_number_err = "Please enter a phone number.";     
    } elseif(strlen(trim($_POST["p_number"])) < 10){
        $p_number_err = "Phone number must have atleast 10 digits.";
    } else{
        $p_number = trim($_POST["p_number"]);
    }


    // Validate skill area
    if(empty(trim($_POST["skill"]))){
        $skill_err = "Please select skill area";
    } else {
        $skillarea = trim($_POST['skill']);
    }

    // Validate parish
    if(empty(trim($_POST["parish"]))){
        $parish_err = "Please select your parish";
    } else {
        $parish = trim($_POST['parish']);
    }

    // Validate city
    if(empty(trim($_POST["city"]))){
        $city_err = "Please select your city";
    } else {
        $city = trim($_POST['city']);
    }

    $profileImageName = time().'_'.$_FILES['profileImage']['name'];
	
	$target = 'image/'.$profileImageName;
	
	if (move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)) {
        
    }
    
    // Check input errors before inserting in database
    if(empty($c_name_err) && empty($email_err) && empty($p_number_err) && empty($skillarea_err) && empty($password_err) && empty($confirm_password_err) ){
        
        // Prepare an insert statement
        $sql = "INSERT INTO applicant (c_name, f_name, m_name, l_name, gender, email, phone, photo, skillarea, account_type,  password ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssssssss", $param_c_name, $param_f_name, $param_m_name ,$param_l_name, $param_gender, $param_email, $param_p_number, $param_img, $param_skillarea, $param_account_type, $param_password);
            
            // Set parameters
            $param_c_name = $c_name;
            $param_f_name = "";
            $param_m_name = "";
            $param_l_name = "";
            $param_email = $email;
            $param_account_type = "TRUE";
            $param_p_number = $p_number;
            $param_img = $target;
            $param_gender = "";
            $param_skillarea = $skillarea;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                //$_SESSION["c_name"] = $c_name;
                header("location: thanks_signup.php");

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