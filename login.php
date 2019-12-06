<?php
    include('includes/header.php');
    require_once "scripts/login_script.php";
?>

<nav class="deep-purple darken-1" role="navigation">
<div class="nav-wrapper  container"><a id="logo-container" href="index.php" class="brand-logo"><img class="logo_size" src="img\logo.png" alt=""></a>
    <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
        <li><a href="signup.php">Sign up</a></li>
    </ul>

    <ul id="nav-mobile" class="sidenav">
        <li><a href="index.php">Home</a></li>
        <li><a href="signup.php">Sign up</a></li>
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
                <div class="input-field col s12 <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                    <input id="email" type="email" name ="email" class="validate">
                    <label for="email">Email</label>
                    <span class="red-text text-accent-4"><?php echo $email_err; ?></span>
                </div>
                
                <div class="input-field col s12 <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <input id="password" type="password" name="password" class="validate">
                    <label for="password">Password</label>
                    <span class="red-text text-accent-4"><?php echo $password_err; ?></span>
                </div>
                <div class="col s12">
                <a class="deep-purple-text text-lighten-3" href="forget_password.php">Forgot your password?</a>
                </div>
            </div>
            <button class="btn waves-effect waves-light deep-purple accent-4" type="submit">Submit
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
