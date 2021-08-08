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
<br></br>
<div class="container">
    <div class="row">
<div class="col md 4">
        <div class="card " style="width:50%;" >
  <img style="width:30%;" src="data:image/png;base64,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" class="card-img-top mx-auto" alt="...">
  <div class="card-body">
    <h5 class="card-title"><i class="fa fa-user"></i>karthicrajan</h5>
    <p class="card-text">karthicrajan</p>
    <p class="card-text">Admin</p>
    <p class="card-text">Last Login :XXXX-XX-XXX</p>
    <a href="#" class="btn btn-primary">Edit profile</a>
  </div>
</div>
</div>
        <div class="col md 8">
        <div class="jumbotron">
        <h1>Welcome Admin</h1>
    
            <div class="card">
      <div class="card-body">
        <h5 class="card-title">Order</h5>
        <p class="card-text">Here you can get invoices and make order</p>
        <a href="new_order.php" class="btn btn-info">New Order</a>
      </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
<div class="container">

<div class="Manage">
    <div class="row">
    <div class="col md 4">
           <div class="card">
             <div class="card-body ">
               <h5 class="card-title">Categories</h5>
               <p class="card-text">Here you can Manage your Categories and Add Categories</p>
              <a href="#" data-bs-toggle="modal" data-bs-target="#category" class="btn btn-info">Add </a>
              <a href="manage_categories.php" class="btn btn-info">Manage </a>
             </div>
         </div>
    </div>

    <div class="col md 4">
    <div class="card">
             <div class="card-body" >
               <h5 class="card-title">Brands</h5>
               <p class="card-text">Here you can Manage your Brands and Add Brands</p>
              <a href="#" data-bs-toggle="modal" data-bs-target="#brand" class="btn btn-info">Add </a>
              <a href="manage_brand.php" class="btn btn-info">Manage </a>
             </div>
         </div>
    </div>
    <div class="col md 4">
    <div class="card">
             <div class="card-body">
               <h5 class="card-title">Products</h5>
               <p class="card-text">Here you can Manage your Products and Add Products</p>
              <a href="#" data-bs-toggle="modal" data-bs-target="#products" class="btn btn-info">Add </a>
              <a href="manage_product.php" class="btn btn-info">Manage </a>
              <a href="count.php" class="btn btn-info">Check Stock </a>
             </div>
         </div>
    </div>


    </div>
</div>
</div>
<!-- Button trigger modal -->

<!-- Modal -->
<!---catagory-->
<?php include_once ("./templates/category.php"); ?>
<!---brand-->
<?php include_once ("./templates/brand.php"); ?>
<!---products-->
<?php include_once ("./templates/products.php"); ?>

</body>
</html>
