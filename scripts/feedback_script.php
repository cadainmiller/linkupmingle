<?php
    $today = date("F j, Y, g:i a"); 
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];
    $ratings ="";


    $filename = 'customerfeedback.txt';

        if(isset($_POST['MyRadio'])) {
        
            $ratings = $_POST['MyRadio'];

        if($ratings == "rating_1")
        {
            $ratings = "Ratings 1";
        }
        else if ($ratings == "rating_")
        {
            $ratings = "Ratings 2";
        }
        else if ($ratings == "rating_3")
        {
            $ratings = "Ratings 3";
        }
        else if ($ratings == "rating_4")
        {
            $ratings = "Ratings 4";
        }
        else if($ratings == "rating_5")
        {
            $ratings = "Ratings 5";
        } 
    }




 if ( $myfile = fopen ($filename, 'a')){

        $outputFile = " Date: $today\n\n Full Name: $fname $lname\n\n Ratings: $ratings\n\n Email: $email\n\n Feedback: $comments\n\n";
     
        fputs ($myfile, $outputFile);

         fclose ($myfile);
 } else {
     echo ("Can not open file");
 }
?>
