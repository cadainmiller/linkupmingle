<?php
    // Define variables and initialize with empty values
    $email = "";
    $email_err = "";

    // Include config file
    require_once "includes/config.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if email is empty
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    } else{
        $email = trim($_POST["email"]);
    }

    //echo $email;

    $sql = "SELECT * FROM applicant WHERE email ='$email'";

    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $password = $row['password'];
        }
        //echo $password;
        

        require "PHPMailer/PHPMailerAutoload.php";
        function smtpmailer($to, $from, $from_name, $subject, $body)
            {
                $mail = new PHPMailer();
                $mail->IsSMTP();
                $mail->SMTPAuth = true; 
         
                $mail->SMTPSecure = 'ssl'; 
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 465;  
                $mail->Username = '';
                $mail->Password = '';   
           
           //   $path = 'reseller.pdf';
           //   $mail->AddAttachment($path);
           
                $mail->IsHTML(true);
                $mail->From="cadainmiller@gmail.com";
                $mail->FromName=$from_name;
                $mail->Sender=$from;
                $mail->AddReplyTo($from, $from_name);
                $mail->Subject = $subject;
                $mail->Body = $body;
                $mail->AddAddress($to);
                if(!$mail->Send())
                {
                    $error ="Please try Later, Error Occured while Processing...";
                    echo $error;
                    return $error; 
                }
                else 
                {
                    $error = "Thanks You !! Your email is sent.";  
                    echo $error;
                    return $error;
                }
            }
            
            $to   = $email;
            $from = 'cadainmiller@gmail.com';
            $name = 'LinkUpMingle';
            $subj = 'PHPMailer 5.2 testing from DomainRacer';
            $msg = 'This is mail about testing mailing using PHP.';
            
            
            $error=smtpmailer($to,$from, $name ,$subj, $msg);

    } else {
        echo "0 records found.";
    }
}

?>

