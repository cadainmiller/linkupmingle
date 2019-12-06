<?php
// Include config file
require_once "includes\config.php";
 
// Define variables and initialize with empty values
 $f_name = $m_name = $l_name = $p_number = $gender = $skillarea = $parish = $photo =$city = $password = $confirm_password = "";
 $f_name_err = $m_name_err = $l_name_err = $email_err = $p_number_err = $gender_err = $skillarea_err = $photo_err = $parish_err = $city_err = $password_err = $confirm_password_err = "";
 $account_type = "FALSE";


// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate first name

    

    // Validate first name
    if(empty(trim($_POST["f_name"]))){
        $f_name_err = "Please enter your first name.";
    } else {
        $f_name = trim($_POST["f_name"]);
    }


    // Validate middle name
    if(empty(trim($_POST["m_name"]))){
        $m_name_err = "Please enter your middle name.";
    } else {
        $m_name = trim($_POST["m_name"]);
    }

    // Validate last name
    if(empty(trim($_POST["l_name"]))){
        $l_name_err = "Please enter your last name.";
    } else {
        $l_name = trim($_POST["l_name"]);
    }

    // Validate phone number
    if(empty(trim($_POST["p_number"]))){
        $p_number_err = "Please enter a phone number.";     
    } elseif(strlen(trim($_POST["p_number"])) < 10){
        $p_number_err = "Phone number must have atleast 10 digits.";
    } else{
        $p_number = trim($_POST["p_number"]);
    }

    // Validate gender
    if(empty(trim($_POST["gender"]))){
        $gender_err = "Please select gender";
    } else {
        $gender = trim($_POST['gender']);
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
    if(empty($f_name_err) && empty($m_name_err) && empty($l_name_err) && empty($p_number_err) && empty($gender_err) && empty($skillarea_err) ){

        $sql = "UPDATE applicant SET f_name=$f_name, m_name=$m_name, l_name=$l_name, gender=$gender, phone=$p_number, WHERE applicant_id = '$email'";
        
        if(mysqli_query($link, $sql)){
        echo "Records were updated successfully.";
        } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

    }
}
?>