<?php
global $con;
include('../include/connect.php');
include('../function/common_functions.php');
$user_id=$_GET['user_id'];
////geting total items anf total price of all items
$get_ip_address=getIPAddress();
$total_price=0;
$cart_query_price="Select * from `cart_details` where ip_address='$get_ip_address'";
$result_cart_price=mysqli_query($con,$cart_query_price);
$invoice_number = mt_rand();
$status = 'pending';
$count_product=mysqli_num_rows($result_cart_price);
while($row_price=mysqli_fetch_array($result_cart_price)){
    $product_id=$row_price['product_id'];
    $quantity = $row_price['quantity'];
    $select_product="Select * from `products` where product_id='$product_id'";
    $run_price=mysqli_query($con,$select_product);
    while ($row_product_price=mysqli_fetch_array($run_price)){
        $product_price=array($row_product_price['product_price']);
        $product_values=array_sum($product_price);
        $total_price+=$product_values*$quantity;
    }
}

//$get_cart = "Select * from `cart_details`";
//$run_cart = mysqli_query($con, $get_cart);
//$get_item_quantity = mysqli_fetch_array($run_cart);
//$quantity = $get_item_quantity['quantity'];
//if ($quantity == 0)
//{
//    $quantity = 1;
//    $subtotal = $total_price;
//}
//else{
//    $subtotal = $total_price * $quantity;
//}

$insert_order = "INSERT into `user_orders` (user_id, amount_due, invoice_number, total_products, order_date, order_status) values ($user_id,$total_price, $invoice_number, $count_product, NOW(), '$status')";
$result_query = mysqli_query($con, $insert_order);
if ($result_query)
{
    echo "<script>alert('Orders are submitted!')</script>";
    echo "<script>window.open('profile.php', '_self')</script>";
}
else{
    echo "<script>alert('Error occurred!')</script>";

}

//orders pending
$insert_pending_orders = "INSERT into `orders_pending` (user_id, invoice_number, product_id, quantity, order_status) values ($user_id, $invoice_number, $product_id, $quantity, '$status')";
$result_order_pending_query = mysqli_query($con, $insert_pending_orders);

//delete item from cart
$empty_cart = "DELETE from `cart_details` where ip_address='$get_ip_address'";
$result_delete_cart = mysqli_query($con, $empty_cart);
