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
<!-- <script type="text/javascript" src="./js/manage.js"></script> -->
<!-- <link rel="stylesheet" href="./css/login.css">-->
 <link rel="stylesheet" href="./css/dashboard.css">
<link rel="stylesheet" href="count.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
</head>
<body>
    
<?php 
include_once("./templates/header.php");
include_once("./templates/update_products.php");
?>
<h2 class="texting">The Displaying Products Are less Then Limit</h2>


<?php 
$connection = mysqli_connect('localhost','root','','project_inv');
if(!$connection){
  echo 'connected' . mysqli_error() ;
}
// $query = "INSERT INTO catagory(catagory_title) VALUES ('js')";
// mysqli_query($connection, $query);
 
   $select_all_query ="SELECT * FROM products ";
   $result = mysqli_query($connection,$select_all_query );
   
//    if($result){
//        echo "connected";
//    }else {
//        echo "not connected";
//    }
//    while($row = mysqli_fetch_assoc($result)){
//     $id = $row['pid'];
//     $product_name = $row['product_name'];
//     $product_price = $row['product_price'];
//     $product_stock = $row['product_stock'];
    
//     echo "<option value='$id'>$id</option>";
//     echo "<option value='$product_name'>$product_name</option>";
//     echo "<option value='$product_stock'>$product_stock</option>";
// }

?>
<br></br>

<div class ="container">

<table class="table table-hover table-secondary table-bordered">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
      <th scope="col">Stock</th>
      <th scope="col">Order</th>
    </tr>
  </thead>
  <tbody id="get_product">
      <?php 
      
          
      while($row = mysqli_fetch_assoc($result)){
        $id = $row['pid'];
        $product_name = $row['product_name'];
        $product_price = $row['product_price'];
        $product_stock = $row['product_stock'];
        if($product_stock < 100){
      ?>
    <tr>
      <th scope="row">1</th>
      <td> <?php echo $product_name; ?></td>
      
      <td><?php echo $product_price;?></td>
      <td><?php echo $product_stock;?></td>
      
      <td>
          
          <a href="manage_product.php" class="btn btn-info btn-sm edit_product ">Order</a>
        </td>
    </tr>
<?php } ?>
<?php }?>
  </tbody>
</table>
</div>
<?php 
//include_once("./templates/update_products.php");

?>
</body>
</html>
