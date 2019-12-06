<?php
    session_start();
    include('includes/header.php');
    require_once "scripts/update_account_script.php";
?>

<?php

include('includes\accountinfo.php');

?>

<!DOCTYPE html>
  <html>

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
    <div class="nav-wrapper  container"><a id="logo-container" href="index.php" class="brand-logo"><img class="logo_size" src="img\logo.png" alt=""></a>
            <ul class="right hide-on-med-and-down">
            <li><a href="view_jobs.php" class="waves-effect">View Job</a></li>
            <li><a class = "dropdown-button" href = "#" data-activates = "dropdown"><?php echo $f_name; ?>
            <i class = "mdi-navigation-arrow-drop-down right"></i></a>	</li>
            </ul>
            <ul id="dropdown" class="dropdown-content deep-purple darken-1">
            <li><a href = "#!">Profile</a></li>
            <li><a href="reset-password.php">Reset Password</a></li>
            <li class = "divider"></li>
            <li><a href="logout.php">Sign Out</a></li>
            </ul>
    
            <ul id="nav-mobile" class="sidenav">
            <li><a href = "#">Profile</a></li>
            <li><a href="logout.php">Sign Out</a></li>
            <li><a href="reset-password.php">Reset Password</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>


<div class="container signup_padding_top">

    <form class="col s12" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "post" enctype="multipart/form-data">
        <div class="row ">
            <div class="col s12 ">

                <div class="col s12">
                    <div class="col s6">
                    <h5 class="deep-purple-text accent-3"> <?php echo $f_name; ?> Account</h5>
                    </div>
                    <div class="col s6">
                    </div>       
                </div>

                <div class="col s4 <?php echo (!empty($f_name_err)) ? 'has-error' : ''; ?>">
                    <div class="input-field">
                    <i class="material-icons prefix">account_circle</i>
                    <input value="<?php echo $f_name; ?>" id="f_name" type="text" name ="f_name" class="validate">
                    <label for="f_name">First Name</label>
                    <span class="red-text text-accent-4"><?php echo $f_name_err; ?></span>
                    </div>
                </div>

                <div class="col s4 <?php echo (!empty($m_name_err)) ? 'has-error' : ''; ?>">
                    <div class="input-field">
                    <input value="<?php echo $m_name; ?>" id="m_name" type="text" name ="m_name" class="validate">
                    <label for="m_name">Middle Name</label>
                    <span class="red-text text-accent-4"><?php echo $m_name_err; ?></span>
                    </div>
                </div>

                <div class="col s4 <?php echo (!empty($l_name_err)) ? 'has-error' : ''; ?>">
                    <div class="input-field">
                    <input value="<?php echo $l_name; ?>" id="l_name" type="text" name ="l_name" class="validate">
                    <label for="l_name">Last Name</label>
                    <span class="red-text text-accent-4"><?php echo $l_name_err; ?></span>
                    </div>
                </div>                           
            </div>

            <div class="col s12">
                <div class="col s7">
                    <div class="input-field">
                    <i class="material-icons prefix">email</i>
                    <input disabled  value="<?php echo $email; ?>" id="email" type="email" name ="email" class="validate">
                    <label for="email">Email</label>
                    </div>
                </div>
                <div class="col s5">
                    <div class="file-field input-field">
                        <div class="btn deep-purple accent-4">
                            <span>Profile Picture</span>
                            <input value="<?php echo $photo; ?>" type="file" name="profileImage" id="profileImage">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                </div>      
            </div>

            <div class="col s12">
                <div class="col s7 <?php echo (!empty($p_number_err)) ? 'has-error' : ''; ?>">
                    <div class="input-field">
                    <i class="material-icons prefix">phone</i>
                    <input value="<?php echo $p_number; ?>" id="p_number" type="number" name ="p_number" class="validate">
                    <label for="p_number">Phone Number</label>
                    <span class="red-text text-accent-4"><?php echo $p_number_err; ?></span>
                    </div>
                </div>
                <div class="col s5">

                </div>       
            </div>

            <div class="col s12 <?php echo (!empty($gender_err)) ? 'has-error' : ''; ?>">
                <div class="input-field col s7">
                    <i class="material-icons prefix"><img src="img\imale.png"></i>
                    <select name="gender">
                    <option  value="<?php echo $gender; ?>" selected><?php echo $gender; ?></option>
                    <?php
                        if ($gender == 'Female'){
                            echo '<option value="Male">Male</option>';
                        } else {
                            echo '<option value="Female">Female</option>';
                        }               
                    ?>
                    <option value="Other">Other</option>
                    </select>
                    <label>Gender</label>
                    <span class="red-text text-accent-4"><?php echo $gender_err; ?></span>
                </div>
                <div class="col s5">

                </div>       
            </div>

            <div class="col s12 <?php echo (!empty($skillarea_err)) ? 'has-error' : ''; ?>">
                <div class="input-field col s7">
                    <i class="material-icons prefix">school</i>
                    <select name="skill">
                    <option value="<?php echo $skillarea; ?>" selected><?php echo $skillarea; ?></option>
                    <option value="IT">IT</option>
                    <option value="Hospitality">Hospitality</option>
                    <option value="Business">Business</option>
                    <option value="Science and Arts">Science and Arts</option>
                    </select>
                    <label>Skill Area</label>
                    <span class="red-text text-accent-4"><?php echo $skillarea_err; ?></span>
                </div>
                <div class="col s5">

                </div>       
            </div>

            <div class="col s12 <?php echo (!empty($parish_err . $city_err )) ? 'has-error' : ''; ?> ">
                <div class="input-field col s3">
                    <i class="material-icons prefix">place</i>
                    <select name="parish">
                    <option  value="<?php echo ''; ?>" selected>Address</option>
                    <option value="Saint James">Saint James</option>
                    <option value="Saint Elizabeth">Saint Elizabeth</option>
                    <option value="Hanover">Hanover</option>
                    <option value="	Westmoreland">Westmoreland</option>
                    </select>
                    <label>Parish</label>
                    <span class="red-text text-accent-4"><?php echo $parish_err; ?></span>
                </div>

                <div class="input-field col s3">
                    <select name="city">
                    <option value="" disabled selected>City</option>
                    <option value="Montego Bay">Montego Bay</option>
                    <option value="Falmouth">Falmouth</option>
                    <option value="Savanna-la-Mar">Savanna-la-Mar</option>
                    <option value="Black River">Black River</option>
                    </select>
                    <span class="red-text text-accent-4"><?php echo $city_err; ?></span>
                </div>
                <div class="col s5">

                </div>       
            </div>         
            
            <div class="col s6 center">
            <button class="btn waves-effect waves-light deep-purple accent-4" type="submit" value="Submit">Update</button>
            </div>
            </button>
        </div>
    </form>
</div>

<?php
    include('includes/scripts.php');
?>
