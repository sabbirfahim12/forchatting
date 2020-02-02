<?php

$connect=mysqli_connect("localhost","forhad","01887342027","mychat");

if(isset($_POST["sign_in"])){

    $email=htmlentities(mysqli_real_escape_string($connect,$_POST["email"]));
    $pass=htmlentities(mysqli_real_escape_string($connect,$_POST["password"]));
    
$selecuser="SELECT * FROM users WHERE user_email='$email' AND user_pass='$pass'";
$seleltquery=mysqli_query($connect,$selecuser);

$mychekuser=mysqli_num_rows($seleltquery);

if($mychekuser==1){

    
    $_SESSION["user_email"]=$email;

$updatemsg=mysqli_query($connect,"UPDATE users SET log_in='Online' WHERE user_email='$email'");

    $_SESSION["user_email"]=$user;
    $getuser="SELECT * FROM users WHERE user_email='$user'";
    
    $runuser=mysqli_query($connect,$getuser);
    
    $row=mysqli_fetch_array($runuser);
    $user_name=$row["user_name"];





echo "<script>window.open('home.php?user_name=$user_name','_self')</script>";

}
else{

    echo "<script>alert('CHECK  YOUR EMAIL AND PASSWORD')</script>";
}






}






?>