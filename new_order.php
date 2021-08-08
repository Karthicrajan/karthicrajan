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
<script type="text/javascript" src="./js/order.js"></script>
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
			<div class="col-md-10 mx-auto">
				<div class="card" style="box-shadow:0 0 25px 0 lightgrey;">
				  <div class="card-header">
				   	<h4>New Orders</h4>
				  </div>
				  <div class="card-body">
				  	<form id="get_order_data" onsubmit="return false">
				  		<div class="form-group row">
				  			<label class="col-sm-3 col-form-label" align="right">Order Date</label>
				  			<div class="col-sm-6">
				  				<input type="text" id="order_date" name="order_date" readonly class="form-control form-control-sm" value="<?php echo date("Y-d-m"); ?>">
				  			</div>
				  		</div>
				  		<div class="form-group row">
				  			<label class="col-sm-3 col-form-label" align="right">Customer Name*</label>
				  			<div class="col-sm-6">
				  				<input type="text" id="cust_name" name="cust_name"class="form-control form-control-sm" placeholder="Enter Customer Name" required/>
				  			</div>
				  		</div>


				  		<div class="card" style="box-shadow:0 0 15px 0 lightgrey;">
				  			<div class="card-body">
				  				<h3>Make a order list</h3>
				  				<table align="center" style="width:800px;">
		                            <thead>
		                              <tr>
		                                <th>#</th>
		                                <th style="text-align:center;">Item Name</th>
		                                <th style="text-align:center;">Total Quantity</th>
		                                <th style="text-align:center;">Quantity</th>
		                                <th style="text-align:center;">Price</th>
		                                <th>Total</th>
		                              </tr>
		                            </thead>
		                            <tbody id="invoice_item">
		<!--<tr>
		    <td><b id="number">1</b></td>
		    <td>
		        <select name="pid[]" class="form-control form-control-sm" required>
		            <option>Washing Machine</option>
		        </select>
		    </td>
		    <td><input name="tqty[]" readonly type="text" class="form-control form-control-sm"></td>   
		    <td><input name="qty[]" type="text" class="form-control form-control-sm" required></td>
		    <td><input name="price[]" type="text" class="form-control form-control-sm" readonly></td>
		    <td>Rs.1540</td>
		</tr>-->
		                            </tbody>
		                        </table> <!--Table Ends-->
		                        <center style="padding:10px;">
		                        	<button id="add" style="width:150px;" class="btn btn-success">Add</button>
		                        	<button id="remove" style="width:150px;" class="btn btn-danger">Remove</button>
		                        </center>
				  			</div> <!--Crad Body Ends-->
				  		</div> <!-- Order List Crad Ends-->

				  	<p></p>
                    <div class="form-group row">
                      <label for="sub_total" class="col-sm-3 col-form-label" align="right">Sub Total</label>
                      <div class="col-sm-6">
                        <input type="text" readonly name="sub_total" class="form-control form-control-sm" id="sub_total" required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="gst" class="col-sm-3 col-form-label" align="right">GST (18%)</label>
                      <div class="col-sm-6">
                        <input type="text" readonly name="gst" class="form-control form-control-sm" id="gst" required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="discount" class="col-sm-3 col-form-label" align="right">Discount</label>
                      <div class="col-sm-6">
                        <input type="text" name="discount" class="form-control form-control-sm" id="discount" required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="net_total" class="col-sm-3 col-form-label" align="right">Net Total</label>
                      <div class="col-sm-6">
                        <input type="text" readonly name="net_total" class="form-control form-control-sm" id="net_total" required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="paid" class="col-sm-3 col-form-label" align="right">Paid</label>
                      <div class="col-sm-6">
                        <input type="text" name="paid" class="form-control form-control-sm" id="paid" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="due" class="col-sm-3 col-form-label" align="right">Due</label>
                      <div class="col-sm-6">
                        <input type="text" readonly name="due" class="form-control form-control-sm" id="due" required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="payment_type" class="col-sm-3 col-form-label" align="right">Payment Method</label>
                      <div class="col-sm-6">
                        <select name="payment_type" class="form-control form-control-sm" id="payment_type" required/>
                          <option>Cash</option>
                          <option>Card</option>
                          <option>Draft</option>
                          <option>Cheque</option>
                        </select>
                      </div>
                    </div>

                    <center>
                      <input type="submit" id="order_form" style="width:150px;" class="btn btn-info" value="Order">
                      <input type="submit" id="print_invoice" style="width:150px;" class="btn btn-success d-none" value="Print Invoice">
                    </center>


				  	</form>

				  </div>
				</div>
			</div>
		</div>
	</div>
	


</body>
</html>