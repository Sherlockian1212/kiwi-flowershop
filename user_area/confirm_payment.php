<?php
global $con;
include('../include/connect.php');
include('../function/common_functions.php');
session_start();
if (isset($_GET['order_id'])){
    $order_id = $_GET['order_id'];
    $select_data = "Select * from `user_orders` where order_id='$order_id'";
    $result = mysqli_query($con, $select_data);
    $row_fetch = mysqli_fetch_assoc($result);
    $invoice_number = $row_fetch['invoice_number'];
    $amount_due = $row_fetch['amount_due'];

}
if (isset($_POST['confirm_payment'])){
    $invoice_number = $_POST['invoice_number'];
    $amount = $_POST['amount'];
    $payment_mode = $_POST['payment_mode'];
    $insert_query = "INSERT into `user_payments` (order_id,invoice_number,amount,payment_mode) values ($order_id,$invoice_number,$amount,'$payment_mode')";
    $result = mysqli_query($con, $insert_query);
    if ($result){
        echo "<script>alert('Successfully completed the payment')</script>";
        echo "<script>window.open('profile.php?my_orders','_self')</script>";
    }
    $update_orders = "update `user_orders` set order_status='Completed' where order_id='$order_id'";
    $result_update = mysqli_query($con, $update_orders);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body class="bg-white">
    <div class="container my-5">
        <h1 class="text-center">Confirm Payment</h1>
        <form action="" method="post">
            <div class="form-outline my-4 text-center">
                <label for="invoice_number">Invoice Number</label>
                <input type="text" class="form-control w-50 m-auto" name="invoice_number" value="<?php
                    echo $invoice_number;
                ?>">
            </div>
            <div class="form-outline my-4 text-center">
                <label for="amount">Amount</label>
                <input type="text" class="form-control w-50 m-auto" name="amount" value="<?php
                    echo $amount_due;
                ?>">
            </div>
            <div class="form-outline my-4 text-center">
                <select name="payment_mode" id="" class="form-select w-50 m-auto">
                    <option>Select Payment Mode</option>
                    <option>Cash On Delivery</option>
                    <option>Momo</option>
                    <option>Zalo Pay</option>
                    <option>Paypal</option>
                </select>
            </div>
            <div class="form-outline my-4 text-center">
                <input type="submit" class="btn bg-primary border-0 text-white" name="confirm_payment" value="Confirm">
            </div>
        </form>
    </div>
</body>
</html>