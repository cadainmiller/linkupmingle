<?php
    //session_start();

    // Include config file
    require_once "config.php";

    $email = $_SESSION['f_name'];

    //echo $email;

    $sql = "SELECT * FROM applicant WHERE email ='$email'";

    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $applicant_id = $row['applicant_id'];
            $c_name = $row['c_name'];
            $f_name = $row['f_name'];
            $l_name = $row['l_name'];
            $m_name = $row['m_name'];
            $email = $row['email'];
            $account_type = $row['account_type'];
            $p_number  = $row['phone'];
            $photo  = $row['photo'];
            $gender = $row['gender'];
            $skillarea = $row['skillarea'];

        }
            /*echo $applicant_id;
            echo $f_name;
            echo $l_name;
            echo $m_name;
            echo $c_name;
            echo $email;
            echo $account_type;
            echo $photo;
            echo $gender;
            echo $skillarea;*/

    } else {
        echo "0 records found.";
}

?>