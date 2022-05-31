<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts  --->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / View Orders

</li>

</ol><!-- breadcrumb Ends  --->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"></i> View Orders

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>#</th>
<th>Customer Email</th>
<th>Qty</th>
<th>shipping Price</th>
<th>Total Price</th>
<th>creation Date</th>
<th>delivery Date</th>
<th>Status</th>
<th>Delete</th>


</tr>

</thead><!-- thead Ends -->


<tbody><!-- tbody Starts -->

<?php

$i = 0;

$get_orders = "select * from orders";

$run_orders = mysqli_query($con,$get_orders);

while ($row_orders = mysqli_fetch_array($run_orders)) {

$order_id = $row_orders['orderID'];

$user_email = $row_orders['user_email'];

$creation_date = $row_orders['creationDate'];

$delivery_date = $row_orders['deliveryDate'];

$order_status = $row_orders['order_status'];

$qty = $row_orders['quantity'];
$shipping_price = $row_orders['shippingPrice'];
$due_amount = $row_orders['totalPrice'];

$i++;

?>

<tr>

<td><?php echo $order_id; ?></td>

<td><?php echo $user_email;?></td>

<td><?php echo $qty; ?></td>

<td><?php echo $shipping_price; ?></td>

<td>$<?php echo $due_amount; ?></td>


<!-- <td><?php //echo $product_title; ?></td> -->

<td><?php echo $creation_date;?></td>

<td><?php echo $delivery_date;?></td>


<td>
<?php

if($order_status=='pending'){

echo $order_status='<div style="color:red;">Pending</div>';

}
else{

echo $order_status='Completed';

}


?>
</td>

<td>

<a href="index.php?order_delete=<?php echo $order_id; ?>" >

<i class="fa fa-trash-o" ></i> Delete

</a>

</td>


</tr>

<?php } ?>

</tbody><!-- tbody Ends -->

</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->


<?php } ?>