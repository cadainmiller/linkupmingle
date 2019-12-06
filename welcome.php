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

                  <div class="section no-pad-bot" id="index-banner">
                    <div class="container">
                      <br><br>
                      <h1 class="header center deep-purple-text">Welcome <?php echo $f_name; ?></h1>
                        
                      <div class="row center">
                        <h5 class="header col s12 light">All your job listings in one place</h5>
                      </div>
                      <br><br>
                
                    </div>
                  </div>

                  <!-- Modal Structure -->
                  <div id="modal1" class="modal">
                    <div class="modal-content">
                        <h4>Add Job</h4>

                        <div class="row">
                        <form class="col s12" action = "scripts/add_job_script.php" method = "post">
                            <div class="row modal-form-row">
                            </div>
                            <div class="row">
                            <div class="input-field col s12 <?php echo (!empty($job_title_err)) ? 'has-error' : ''; ?>">
                                <i class="material-icons prefix">account_balance</i>
                                <input id="job_title" type="text" class="validate">
                                <label for="job_title">Title</label>
                                <span class="red-text text-accent-4"><?php echo $job_title_err; ?></span>
                            </div>
                            </div>       
                            <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">access_time</i>
                                <input disabled  value="<?php echo htmlspecialchars(date("d/m/Y")); ?>" id="job_post" type="text" class="timepicker"></input>
                                <label for="job_post">Posted date</label>
                            </div>
                            </div> 
                            <div class="row">
                            <div class="input-field disable col s12 <?php echo (!empty($date_due_err)) ? 'has-error' : ''; ?>">
                                <i class="material-icons prefix">access_time</i>
                                <input id="job_due" placeholder="DD/MM/YYYY" type="text" class="timepicker"></input>
                                <label for="job_due">Due date</label>
                                <span class="red-text text-accent-4"><?php echo $date_due_err; ?></span>
                            </div>
                            </div> 

                        </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-red btn-flat">Cancel</a>
                        <button class="btn waves-effect deep-purple accent-4" type="submit" value="Submit">Post</button>
                    </div>
                    </div>
                </div>
                <br><br>

            </div>
</div>
                  <div class="container">
                    <div class="section">
                

                
                    </div>
                    <br><br>
                  </div>
                  <div>
                  
                  </div>
                
                  
<?php include('includes/footer.php'); ?>