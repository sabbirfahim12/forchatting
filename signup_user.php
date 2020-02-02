<?php
$connect=mysqli_connect("localhost","forhad","01887342027","mychat") or die("connetion was not established");
if(isset($_POST["sign_up"])){

$name=htmlentities(mysqli_real_escape_string($connect,$_POST["user_name"]));
$useremail=htmlentities(mysqli_real_escape_string($connect,$_POST["user_email"]));
$userpass=htmlentities(mysqli_real_escape_string($connect,$_POST["user_password"]));
$usercountry=htmlentities(mysqli_real_escape_string($connect,$_POST["user_country"]));
$usergender=htmlentities(mysqli_real_escape_string($connect,$_POST["user_gender"]));
$rand=rand(1,2);

if($name ==""){

    echo "<script>alert('we can't verify your name')</script>";
}
if(strlen($userpass)<8){
echo "<script>alert('password should be minimum 8 characters')</script>";

}
$checkemail="SELECT * FROM users WHERE user_email='$useremail'";
$runemail=mysqli_query($connect,$checkemail);

$check=mysqli_num_rows($runemail);
if($check ==1){

    echo "<script>alert('Email already Exists,Please TRY again')</script>";
    echo "<script>window.open('signup.php')</script>";
    exit();
}
if($rand==1)

    $profile_pic="koala.jpg";
else if($rand ==2)
$profile_pic="likebtn.jpg";


$insertquery="INSERT INTO users (user_name,user_pass,user_email,user_profile,user_country,user_gender)
VALUES('$name','$userpass','$useremail','$profile_pic','$usercountry','$usergender')";

$query=mysqli_query($connect,$insertquery);
if($query ==true){
echo "<script>alert('Congratulation $name,Your Account has been created successfully')</script>";
echo "<script>window.open('signin.php','_self')</script>";

}
else{
    echo "<script>alert('REGISTRATION FAILED PLEASE TRY AGAIN')</script>";
    echo "<script>window.open('signup.php','_self')</script>";

}







}


?>