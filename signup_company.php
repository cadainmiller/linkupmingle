<?php
    include('includes/header.php');
    require_once "scripts/signup_company_script.php";
?>

<nav class="deep-purple darken-1" role="navigation">
<div class="nav-wrapper  container"><a id="logo-container" href="#" class="brand-logo"><img class="logo_size" src="img\logo.png" alt=""></a>
    <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
    </ul>

    <ul id="nav-mobile" class="sidenav">
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
    </ul>
    <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>


<div class="container signup_padding_top">

    <form class="col s12" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "post">
        <div class="row ">
            <div class="col s12 ">

                <div class="col s12">
                    <div class="col s6">
                    <h5 class="deep-purple-text accent-3">Company Registration Form</h5>
                    </div>
                    <div class="col s6">
                    </div>       
                </div>

                <div class="col s4 <?php echo (!empty($c_name_err)) ? 'has-error' : ''; ?>">
                    <div class="input-field">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="c_name" type="text" name ="c_name" class="validate">
                    <label for="c_name">Company Name</label>
                    <span class="red-text text-accent-4"><?php echo $c_name_err; ?></span>
                    </div>
                </div>
                
                <div class="col s4 ">
                <div class="file-field input-field">
                <div class="file-field input-field">
                        <div class="btn deep-purple accent-4">
                            <span>Company Logo</span>
                            <input  type="file" name="profileImage" id="profileImage">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                    </div>
                </div> 
            </div>

            <div class="col s12">
                <div class="col s7 <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                    <div class="input-field">
                    <i class="material-icons prefix">email</i>
                    <input id="email" type="email" name ="email" class="validate">
                    <label for="email">Email</label>
                    <span class="red-text text-accent-4"><?php echo $email_err; ?></span>
                    </div>
                </div>
                <div class="col s5">
                   
                </div>       
            </div>

            <div class="col s12">
                <div class="col s7 <?php echo (!empty($p_number_err)) ? 'has-error' : ''; ?>">
                    <div class="input-field">
                    <i class="material-icons prefix">phone</i>
                    <input id="p_number" type="number" name ="p_number" class="validate">
                    <label for="p_number">Phone Number</label>
                    <span class="red-text text-accent-4"><?php echo $p_number_err; ?></span>
                    </div>
                </div>
                <div class="col s5">

                </div>       
            </div>

            <div class="col s12 ">
                <div class="col s5">

                </div>       
            </div>

            <div class="col s12 <?php echo (!empty($skillarea_err)) ? 'has-error' : ''; ?>">
                <div class="input-field col s7">
                    <i class="material-icons prefix">school</i>
                    <select name="skill">
                    <option value="" disabled selected>Choose Your Skill Area</option>
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
                    <option value="" disabled selected>Address</option>
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

            <div class="col s12 <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <div class="col s7">
                    <div class="input-field">
                    <i class="material-icons prefix">fingerprint</i>
                    <input id="password" type="password" name="password" class="validate" value="">
                    <label for="password">Password</label>
                    <span class="red-text text-accent-4"><?php echo $password_err; ?></span>
                    </div>
                </div>
                <div class="col s5">

                </div>       
            </div>

            <div class="col s12 <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <div class="col s7">
                    <div class="input-field">
                    <i class="material-icons prefix">fingerprint</i>
                    <input id="confirm_password" type="password" name="confirm_password" class="validate">
                    <label for="confirm_password">Confirm Password</label>
                    <span class="red-text text-accent-4"><?php echo $confirm_password_err; ?></span>
                    </div>
                </div>
                <div class="col s5">

                </div>       
            </div>
            
            
            
            <div class="col s6 center">
            <button class="btn waves-effect waves-light deep-purple accent-4" type="submit" value="Submit">Register</button>
            <button class="btn waves-effect waves-light deep-purple accent-4" type="reset" value="Reset">Reset</button>
            </div>
            </button>
        </div>
    </form>
</div>

<?php
    include('includes/scripts.php');
?>
