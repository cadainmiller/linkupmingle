<?php
    include('includes/header.php');
    require_once "scripts/signup_script.php";
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


<div class="container padding_top">

    <div class="col s6 center  signup_padding_top signupbtn_size">
                <button class="btn waves-effect waves-light deep-purple accent-4 " type="submit" value="Submit"><a class="white-text" href="signup_applicant.php">Applicant</a></button>
                <button class="btn waves-effect waves-light deep-purple accent-4" type="reset" value="Reset"><a class="white-text" href="signup_company.php">Company</a></button>
    </div>

<?php
    include('includes/scripts.php');
?>
