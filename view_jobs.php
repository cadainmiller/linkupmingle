<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

include('includes\accountinfo.php');

?>


<!DOCTYPE html>
  <html>
  <?php
    include('includes/header.php');
    require_once "scripts/add_job_script.php";
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

    <body>
            <nav class="deep-purple darken-1" role="navigation">
            <div class="nav-wrapper  container"><a id="logo-container" href="index.php" class="brand-logo"><img class="logo_size" src="img\logo.png" alt=""></a>
                      <ul class="right hide-on-med-and-down">
                        <li><a href="welcome.php" class="waves-effect">Home</a></li>
                        <li><a class = "dropdown-button" href = "#" data-activates = "dropdown"><?php echo $f_name; ?>
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

                    <div class="container">
                    <br />
                    <h2 align="center">Search Jobs</h2><br />
                    <div class="form-group">
                        <div class="input-group">
                        <div class="input-field col s12">
                            <input id="search_text" type="text" name="search_text" class="form-control">
                            <label for="search_text">Search Jobs</label>
                        </div>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col4 ">
                            
                        </div>
                        <div class="col4 ">
                            <div class="col s12 " id="result"></div>
                        </div>
                        <div class="col4 ">
                            
                        </div>
                    </div>
                    </div>
                    </body>
 <script>
 $(document).ready(function(){

load_data();

function load_data(query)
{
 $.ajax({
  url:"scripts/search_script.php",
  method:"POST",
  data:{query:query},
  success:function(data)
  {
   $('#result').html(data);
  }
 });
}
$('#search_text').keyup(function(){
 var search = $(this).val();
 if(search != '')
 {
  load_data(search);
 }
 else
 {
  load_data();
 }
});
});
 
 </script>                  
    <?php include('includes/footer.php'); ?>
</html>

