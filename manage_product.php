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
<script type="text/javascript" src="./js/manage.js"></script>
 <!-- <link rel="stylesheet" href="./css/login.css"> -->
<link rel="stylesheet" href="./css/dashboard.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
</head>
<body>
<?php 
include_once("./templates/header.php");
?>
<br></br>
<div class ="container">
<table class="table table-hover table-secondary table-bordered">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product</th>
      <th scope="col">category</th>
      <th scope="col">Brand</th>
      <th scope="col">Price</th>
      <th scope="col">Stock</th>
      <th scope="col">Added Date</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="get_product">
    <!-- <tr>
      <th scope="row">1</th>
      <td>Electronics</td>
      <td>Root</td>
      <td> <a href="#" class="btn btn-success btn-sm">Active</a></td>
      <td>
          <a href="#" class="btn btn-danger btn-sm">Delete</a>
          <a href="#" class="btn btn-danger btn-sm">Edit</a>
        </td>
    </tr> -->
  </tbody>
</table>
</div>
<?php 
include_once("./templates/update_products.php");

?>
</body>
</html>
