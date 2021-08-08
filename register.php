<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Invontory Management System</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script type="text/javascript" src="./js/main.js"></script>
<link rel="stylesheet" href="./css/login.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
</head>
<body>
  <div class="full">
<?php 
include_once("./templates/header.php");
?>
<div class="cardlayout">
<div class="container">
<div class="card mx-auto" style="width: 30rem;">
 <div class="cart-header">Register</div>
  <div class="card-body">
    <h5 class="card-title">Register</h5>
    <form id="register_form" onsubmit="return false" autocomplete="off">
    <div class="form-group">
    <label for="username" class="form-label">Full Name</label>
    <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp">
    <small id="u_error" class="form-text text-mented"></small>
  
  <div class="form-group">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name="email_id" class="form-control" id="email" aria-describedby="emailHelp">
    <small id="e_error" class="form-text text-mented"></small>

   
  </div>
  <div class="form-group">
    <label for="password1" class="form-label">Password</label>
    <input type="password" name="password1" class="form-control" id="password1">
    <small id="p1_error" class="form-text text-mented"></small>
  </div>
 
  <div class="form-group">
    <label for="password2" class="form-label">Re-enter Password</label>
    <input type="password" name="password2" class="form-control" id="password2">
    <small id="p2_error" class="form-text text-mented"></small>
  </div>
  <div class="form-group">
    <label for="usertype" class="form-label">UserType</label>
    <select name="usertype" class="form-control" id="usertype">
   <option value='1'>Admn</option>
   <option value='1'>Other</option>
     </select>
     <small id="t_error" class="form-text text-mented"></small>
  </div>
  <div class="loginbtn">
  <button type="submit" name="user_register" class="btn btn-primary btnstyl">Register</button> 
  <span> <a href="index.php">Login</a></span>
  
  </div>
</form>
  </div>
</div>
</div>
</div></div>
</div>

</div>
</body>
</html>
