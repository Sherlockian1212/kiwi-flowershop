<?php
global $con;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$username = $_SESSION['username'];
$get_user = "Select * from `user_table` where username='$username'";
$result = mysqli_query($con, $get_user);
$row_fetch = mysqli_fetch_assoc($result);
$user_id = $row_fetch['user_id'];
?>
<h1>User's orders</h1>
<table class="cart-table">
    <thead class="cart-table-head">
    <tr class="table-head-row">
        <th>STT</th>
        <th>Order Number</th>
        <th>Total Price</th>
        <th>Category Quantities</th>
        <th>Invoice number</th>
        <th>Date</th>
        <th>Complete/Incomplete</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody class="cart-table-body">
        <?php
            $get_order_details = "Select * from `user_orders` where user_id='$user_id'";
            $result_orders = mysqli_query($con, $get_order_details);
            $number = 1;
            while ($row_order=mysqli_fetch_assoc($result_orders)){
                $order_id = $row_order['order_id'];
                $amount_due = $row_order['amount_due'];
                $invoice_number = $row_order['invoice_number'];
                $total_products = $row_order['total_products'];
                $order_date = $row_order['order_date'];
                $order_status = $row_order['order_status'];
                if ($order_status == 'pending')
                    $order_status = 'Incomplete';
                else
                    $order_status = 'Completed';
                echo "<tr class='table-body-row text-center'>
                        <td>$number</td>
                        <td>$order_id</td>
                        <td>$amount_due</td>
                        <td>$total_products</td>
                        <td>$invoice_number</td>
                        <td>$order_date</td>
                        <td>$order_status</td>"
                ?>
                <?php
                if ($order_status=='Completed')
                {
                    echo "<td>Paid</td></tr>";
                }
                else
                {
                    echo "<td><a href='confirm_payment.php?order_id=$order_id' class='text-info'>Confirm</a></td></tr>";
                }
                $number++;
            }
        ?>
    </tbody>
</table>
</body>
</html>