 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>CREATE NEW ACCOUNT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .signup_form{width:500px;margin:24px auto;border-radius:20px;border:2px solid red ;padding:10px}
  
  
  </style>
</head>
<body>

<div class="signup_form">
<form action="" method="POST">

<div class="form-header">
<h2 class="text-center">SIGN UP</h2>
<p class="text-center">FILL out This form start chating with your friends</p>
</div>

<div class="form-group">
<label>USER NAME</label>
<input type="text" name="user_name" 
class="form-control" placeholder="ENTER USER NAME" autocomplete="off" required/>
</div>



    <div class="form-group">
<label>EMAIL ADDRESS</label>
<input type="email" name="user_email" class="form-control" placeholder="ENTER EMAIL" autocomplete="off" required/>
</div>

<div class="form-group">
<label>PASSWORD</label>
<input type="password" name="user_password" class="form-control" placeholder="ENTER PASSWORD" 
autocomplete="off" required/>
</div>

<div class="form-group">
<label>COUNTRY</label>
<select name="user_country" class="form-control">
<option disabled>SELECT YOUR COUNTRY</option>
<option>BANGLADESH</option>
<option>INDIA</option>
<option>PAKISTAN</option>
<option>USA</option>
<option>FRANCE</option>

</select>
</div>
<div class="form-group">
<label>GENDER</label>
<select name="user_gender" class="form-control">
<option disabled>SELECT YOUR GENDER</option>
<option>MALE</option>
<option>FEMALE</option>
<option>OTHERS</option>
</select>
</div>

<div class="form-group">

<label class="chekbox-inline"><input type="checkbox">i accept the <a href="#">the term of uses</a>
</label>

</div>






<div class="form-group">
<button type="submit" name="sign_up" class="btn btn-info btn-lg btn-block">SIGN UP</button>
</div>


</form>
<div class="text-center small" style=" color:#674288">ALREADY HAVE AN ACCOUNT<a href="signin.php">
SIGN IN HERE</a>
</div>

<?php
include("signup_user.php");

?>

</div>


</body>
</html>