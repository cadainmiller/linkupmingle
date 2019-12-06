<?php
// Initialize the session
session_start();

include('includes\accountinfo.php');

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<?php

// Include config file
require_once "includes\config.php";

$id=$_REQUEST['id'];
$query = "SELECT * from job where job_id='".$id."'"; 
$result = mysqli_query($link, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
  <html>
  <?php
    include('includes/header.php');
    ?>

<head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel = "stylesheet"
         href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel = "stylesheet"
         href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script>
    </head>

    <nav class="deep-purple darken-1" role="navigation">
            <div class="nav-wrapper  container"><a id="logo-container" href="welcome_customer.php" class="brand-logo"><img class="logo_size" src="img\logo.png" alt=""></a>
                      <ul class="right hide-on-med-and-down">
                        <li><a href="add_job.php" class="waves-effect">Add Jobs</a></li>
                        <li><a href="my_jobs.php" class="waves-effect">My Job</a></li>
                        <li><a class = "dropdown-button" href = "#" data-activates = "dropdown"><?php echo $email; ?>
                        <i class = "mdi-navigation-arrow-drop-down right"></i></a>	</li>
                      </ul>
                      <ul id="dropdown" class="dropdown-content deep-purple darken-1">
                        <li><a href = "edit_profile.php">Profile</a></li>
                        <li><a href="reset-password.php">Reset Password</a></li>
                        <li class = "divider"></li>
                        <li><a href="logout.php">Sign Out</a></li>
                      </ul>
                
                      <ul id="nav-mobile" class="sidenav">
                        <li><a href = "edit_profile.php">Profile</a></li>
                        <li><a href="logout.php">Sign Out</a></li>
                        <li><a href="reset-password.php">Reset Password</a></li>
                      </ul>
                      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    </div>
                  </nav>

<div class="row addjobs_top">

<div class="col s4">
    <!-- Promo Content 1 goes here -->
</div>


        <?php
            $status = "";
            if(isset($_POST['new']) && $_POST['new']==1)
            {
            $id=$_REQUEST['id'];
            $job_title =$_REQUEST['job_title'];
            $date_due =$_REQUEST['date_due'];

            $update="update job set job_title='".$job_title."', date_due='".$date_due."' WHERE job_id='".$id."'";
            mysqli_query($link, $update) or die(mysqli_error());
            $status = "Job Updated Successfully. </br></br>
            <a href='my_jobs.php'>View My jobs</a>";
            echo '<p style="color:#FF0000;">'.$status.'</p>';
            }else {
        ?>

<div class="col s4">
    <form class="col s12 m15" action="" method = "POST">                         
        <div class="row modal-form-row">
                    <div class="row">
                    <div class="input-field col s12 center ">
                   
                </div>
                </div>   
                </div>
                <div class="row">
                <input type="hidden" name="new" value="1" />
                <div class="input-field col s12 ">
                    <i class="material-icons prefix">account_balance</i>
                    <input id="job_title" name="job_title" type="text" value="<?php echo $row['job_title'];?>"  class="validate">
                    <label for="job_title">Title</label>
                    <span class="red-text text-accent-4"></span>
                </div>
                </div>       
                <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">access_time</i>
                    <input disabled  id="date_posted" type="text" value="<?php echo $row['date_posted'];?>" class="timepicker"></input>
                    <label for="date_posted">Posted date</label>
                </div>
                </div> 
                <div class="row">
                <div class="input-field disable col s12 ">
                    <i class="material-icons prefix">access_time</i>
                    <input id="date_due" name="date_due" value="<?php echo $row['date_due'];?>" type="text" class="timepicker"></input>
                    <label for="date_due">Due date</label>
                    
                </div>
            </div>
            <div class="center">
                <button class="btn waves-effect waves-light deep-purple accent-4" type="submit">Update
                    <i class="material-icons left">add_circle</i>
                </button>
                <button class="btn waves-effect waves-light red accent-4" type="reset">Cancel
                    <i class="material-icons right"></i>
                </button>
            </div>
    </form>


</div>
            <?php } ?>
<div class="col s4">
    <!-- Promo Content 3 goes here -->
</div>  
</div>


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/custom.js"></script>

      <?php include('includes/footer.php'); ?>
</body>
</html>


