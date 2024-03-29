<?php
global $con;
include('../include/connect.php');
?>
<h3 class="text-center text-grey mt-2">All products</h3>
<table class="table table-bordered mt-2">
    <thead class="bg-info text-light">
        <tr class="text-center">
            <th>Num</th>
            <th>Product ID</th>
            <th>Product Title</th>
            <th>Product Image</th>
            <th>Product Price</th>
            <th>Total Sold</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>  
    </thead>
    <tbody class="">
        <?php
        $number=0;
        $get_products="select * from `products`";
        $result=mysqli_query($con,$get_products);
        while ($row=mysqli_fetch_assoc($result)){
            $product_id=$row['product_id'];
            $product_title=$row['product_title'];
            $product_image=$row['product_image'];
            $product_price=$row['product_price'];
            $status=$row['status'];
            $number++;
        ?>
        <tr class='text-center'>
            <td><?php echo $number;?></td>
            <td><?php echo $product_id;?></td>
            <td><?php echo $product_title;?></td>
            <td><img src='./product_images/<?php echo $product_image;?>' class='product_img'></td>
            <td><?php echo $product_price;?></td>
            <td><?php 
                $get_count="Select * from `orders_pending` where product_id=$product_id";
                $result_count=mysqli_query($con,$get_count);
                $rows_count=mysqli_num_rows($result_count);
                echo $rows_count;
            ?>
            </td>
            <td><?php echo $status;?></td>
            <td><a href='index.php?edit_products=<?php echo $product_id;?>' class='text-info'><i class='fa-solid fa-pen-to-square'></i></a></td>
            <td><a href='index.php?delete_products=<?php echo $product_id;?>' class='text-danger'><i class='fa-solid fa-trash'></i></td>
        </tr>
    <?php
        }
    ?>
    </tbody>
</table>

