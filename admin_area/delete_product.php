<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<?php

if(isset($_GET['delete_product'])){

$delete_id = $_GET['delete_product'];

$delete_product = "delete from products where productID='$delete_id'";

$run_product = mysqli_query($con,$delete_product);

if($run_product){

echo "<script>alert('One products Has Been Deleted')</script>";
echo "<script>window.open('index.php?view_products','_self')</script>";

}

}


?>


<?php } ?>