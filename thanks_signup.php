<?php
    include('includes/header.php');
?>

<nav class="deep-purple darken-1" role="navigation">
<div class="nav-wrapper  container"><a id="logo-container" href="#" class="brand-logo"><img class="logo_size" src="img\logo.png" alt=""></a>
    <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
    </ul>

    <ul id="nav-mobile" class="sidenav">
        <li><a href="index.php">Home</a></li>
    </ul>
    <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>


<div class=" center signup_padding_top">

    <div class="row">

    <script type="text/javascript">

    (function () {
    var timeLeft = 10,
    cinterval;

    var timeDec = function (){
    timeLeft--;
    document.getElementById('countdown').innerHTML = timeLeft;
    if(timeLeft === 0){
    clearInterval(cinterval);
    }
    };

    cinterval = setInterval(timeDec, 1000);
    })();

    </script>

        <div class="col s12 ">
            <div>
            <img class="center" src="img\LinkUpMingle.png" alt="" style="width:1500px;height:600px;">
            <h2 class="">Thank you becoming an member</h2>
            <h2></h2>
            <span>Redirecting in <span id="countdown">10</span> seconds.</span>
            </div>

            <?php header( "refresh:5;url=login.php" ); ?>
        
        </div>
    </div>

</div>

<?php
    include('includes/scripts.php');
?>
