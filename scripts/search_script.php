<?php
session_start();
include('..\includes\accountinfo.php');

$connect = mysqli_connect("localhost", "root", "", "linkupmingle");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM job 
  WHERE job_title LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM job ORDER BY job_title
 ";

 //$query = "SELECT * FROM job WHERE skillarea ='$skillarea'";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
    <div class="row">

    <div class="col s6">
        <div class="card">
            <div class="card-image">
                <img src="">
                <a href="apply.php" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">local_post_office</i></a>
            </div>
            <div class="card-content">
                <span class="card-title">'.$row["job_title"].'</span>
                <p><b>Date Posted:</b> '.$row["date_posted"].' </p>
                <p><b>Date Posted:</b> '.$row["date_due"].' </p>
            </div>
        </div>
    </div>

  </div>
        
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>