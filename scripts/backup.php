// Prepare a select statement
   $sql = "SELECT applicant_id, email, password FROM applicant WHERE email = ?";
        
   if($stmt = mysqli_prepare($link, $sql)){
       // Bind variables to the prepared statement as parameters
       mysqli_stmt_bind_param($stmt, "s", $param_email);
       
       // Set parameters
       $param_email = $email;
       
       // Attempt to execute the prepared statement
       if(mysqli_stmt_execute($stmt)){
           // Store result
           mysqli_stmt_store_result($stmt);
           
           // Check if email exists, if yes then verify password
           if(mysqli_stmt_num_rows($stmt) == 1){                    
               // Bind result variables
               mysqli_stmt_bind_result($stmt, $applicant_id, $f_name, $hashed_password);
               if(mysqli_stmt_fetch($stmt)){
                   if(password_verify($password, $hashed_password)){
                       // Password is correct, so start a new session
                       session_start();
                       
                       // Store data in session variables
                       $_SESSION["loggedin"] = true;
                       $_SESSION["applicant_id"] = $id;
                       $_SESSION["f_name"] = $f_name;                        
                       
                       // Redirect user to welcome page
                       header("location: welcome.php");
                   } else{
                       // Display an error message if password is not valid
                       $password_err = "The password you entered was not valid.";
                   }
               }
           } else{
               // Display an error message if email doesn't exist
               $email_err = "No account found with that email.";
           }
       } else{
           echo "Oops! Something went wrong. Please try again later.";
       }
       
   // Close statement
   mysqli_stmt_close($stmt);
   }

   // Close connection
   mysqli_close($link);
