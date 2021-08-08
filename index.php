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
<link rel="stylesheet" href="./css/dashboard.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
</head>
<body>
<?php 
include_once("./templates/header.php");
?>
<div class="row">
    <div class="col 6">
    <div class="bodytext"> 
     <h1>Inventory System</h1>
     </div>

    </div>
    <div class="col 6"><div class="cardlayout">
<div class="container">
<div class="card mx-auto" style="width: 20rem;">
  <img style="wigth:60%;"  class="mc-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpQL4pfHXVLeDtYHBDpJKB9NvcVTeywrodUw&usqp=CAU"  class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Login</h5>
    <form id="form_login" onsubmit="return false">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="log_email" name="log_email" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="log_password" id="log_password">
    <small id="p_error" class="form-text text-muted"></small>
  </div>
  <div class="loginbtn">
  <button type="submit" class="btn btn-primary btnstyl">LOGIN</button> <br>
  <span> <a href="register.php">Register Here</a> </span>
  </div>
</form>
  </div>
</div>
</div>
</div></div>
</div>


</body>
</html>
