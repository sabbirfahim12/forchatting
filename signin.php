<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>SIGN IN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .sign_form{width:500px;margin:24px auto;}
  
  </style>
</head>
<body>
<div class="sign_form">
<form  method="POST">
<div class="form-header">
<h2 class="text-center">SIGN IN</h2>
<p class="text-center">LOGIN TO MYCHAT</p>
</div>
    <div class="form-group">
<label>EMAIL</label>
<input type="email" name="email" class="form-control" placeholder="ENTER EMAIL" autocomplete="off" required/>
</div>

<div class="form-group">
<label>PASSWORD</label>
<input type="password" name="password" class="form-control" placeholder="ENTER PASSWORD" 
autocomplete="off" required/>
</div>


<div class="small"><a href="forget_pass.php">CLICK HERE</a></div><br>

<div class="form-group">
<button type="submit" name="sign_in" class="btn btn-info btn-lg btn-block">SIGN IN</button>
</div>



</form>
<div class="text-center small" style=" color:#674288">Don'have an account?<a href="signup.php">
CREATE ONE</a>

</div>


</div>
<?php
include("signin_user.php");

?>

</body>
</html>