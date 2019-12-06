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
                        <li><a href="view_jobs.php" class="waves-effect">View Job</a></li>
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

<div class="row padding_top">

<div class="col s4">
    <!-- Promo Content 1 goes here -->
</div>

<div class="col s4">
    <form class="col s12" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "POST">                         
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" name ="email" class="validate">
                    <label for="email">Email</label>
                    <span class="red-text text-accent-4"></span>
                </div>

            </div>
                
            </div>
            <button class="btn waves-effect waves-light deep-purple accent-4" type="submit">Apply 
                <i class="material-icons right">send</i>
            </button>
    </form>
</div>

<div class="col s4">
    <!-- Promo Content 3 goes here -->
</div>  
</div>


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/custom.js"></script>

  
</body>
</html>
