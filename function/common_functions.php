<?php
function getProducts()
{
    global $con;
    $select_query = "Select * from `products` order by product_title";
    $result_query = mysqli_query($con, $select_query);
    while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_keywords = $row['product_keywords'];
        $category_id = $row['category_id'];
        $product_image = $row['product_image'];
        $product_price = $row['product_price'];
        $date = $row['date'];
        $status = $row['status'];
        echo "
                    <div class='col-lg-4 col-md-6 text-center $category_id'>
                        <div class='single-product-item'>
                            <div class='product-image'>
                                <a href='single-product.php?product_id=$product_id'><img src='./admin/product_images/$product_image' alt=''></a>
                            </div>
                        <h3>$product_title</h3>
                        <p class='product-price'><span>Per Kg</span> $product_price VNĐ </p>
                        <a href='shop.php?add_to_cart=$product_id' class='cart-btn'><i class='fas fa-shopping-cart'></i> Add to Cart</a>
                        </div>
                    </div>";
    }
}

function getCategories()
{
    global $con;
    $select_categories = "Select * from `categories`";
    $result_categories = mysqli_query($con, $select_categories);
    while ($row_data = mysqli_fetch_assoc($result_categories)) {
        $category_title = $row_data['name'];
        $category_id = $row_data['id'];
        echo "<li data-filter='.$category_id'>$category_title</li>";
    }
}

function searchProduct()
{
    global $con;
    if (isset($_GET['search_data_product'])) {
        $search_data_value = $_GET['search_data'];
        $search_query = "Select * from `products` where product_keywords like '%$search_data_value%'";
        $result_query = mysqli_query($con, $search_query);
        $num_of_row = mysqli_num_rows($result_query);
        if ($num_of_row == 0) {
            echo "<h2 class='text-center'>Nothing to show up.</h2>";
            return;
        }
        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_keywords = $row['product_keywords'];
            $category_id = $row['category_id'];
            $product_image = $row['product_image'];
            $product_price = $row['product_price'];
            $date = $row['date'];
            $status = $row['status'];
            echo "
						<div class='col-lg-4 col-md-6 text-center 1'>
							<div class='single-product-item'>
								<div class='product-image'>
									<a href='single-product.php?product_id=$product_id'><img src='./admin/product_images/$product_image' alt=''></a>
								</div>
							<h3>$product_title</h3>
							<p class='product-price'><span>Per Kg</span> $product_price VNĐ </p>
							<a href='shop.php?add_to_cart=$product_id' class='cart-btn'><i class='fas fa-shopping-cart'></i> Add to Cart</a>
							</div>
						</div>";
        }
    }
}

function viewDetails()
{
    global $con;
    if (isset($_GET['product_id'])) {
        if (!isset($_GET['category'])) {
            $product_id = $_GET['product_id'];
            $select_query = "Select * from `products` where product_id='$product_id'";
            $result_query = mysqli_query($con, $select_query);
            while ($row = mysqli_fetch_assoc($result_query)) {
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_description = $row['product_description'];
                $product_keywords = $row['product_keywords'];
                $category_id = $row['category_id'];
                $product_image = $row['product_image'];
                $product_price = $row['product_price'];
                $date = $row['date'];
                $status = $row['status'];
                echo "
                    <div class='col-md-5'>
						<div class='single-product-img'>
							<img src='./admin/product_images/$product_image' alt>
						</div>
					</div>
					<div class='col-md-7'>
						<div class='single-product-content'>
							<h3>$product_title</h3>
							<p class='single-product-pricing'><span>Per Kg</span>$product_price VNĐ</p>
							<p>$product_description</p>
							<div class='single-product-form'>
								<form action='index.php''>
									<input type='number' placeholder='0'>
								</form>
								<a href='shop.php?add_to_cart=$product_id' class='cart-btn'><i class='fas fa-shopping-cart'></i>
									Thêm vào giỏ hàng</a>
							</div>
							<h4>Share:</h4>
							<ul class='product-share'>
								<li><a href><i class='fab fa-facebook-f'></i></a></li>
								<li><a href><i class='fab fa-twitter'></i></a></li>
								<li><a href><i class='fab fa-google-plus-g'></i></a></li>
								<li><a href><i class='fab fa-linkedin'></i></a></li>
							</ul>
						</div>
					</div>
            ";
            }
        }
    }
}

function viewRelatedProduct()
{
    global $con;
    if (isset($_GET['product_id'])) {
        if (!isset($_GET['category'])) {
            $product_id = $_GET['product_id'];
            $select_query = "Select * from `products` where product_id='$product_id'";
            $result_query = mysqli_query($con, $select_query);
            while ($row = mysqli_fetch_assoc($result_query)) {
                $product_id = $row['product_id'];
                $category_id = $row['category_id'];
                $select_related_product = "Select * from `products` where product_id!='$product_id' and category_id ='$category_id'";
                $result = mysqli_query($con, $select_related_product);
                while ($relate = mysqli_fetch_assoc($result)) {
                    $relate_id = $relate['product_id'];
                    $relate_name = $relate['product_title'];
                    $relate_image = $relate['product_image'];
                    $relate_price = $relate['product_price'];
                    echo "<div class='col-lg-4 col-md-6 text-center'>
						<div class='single-product-item'>
							<div class='product-image'>
								<a href='single-product.php?product_id=$relate_id'><img
										src='./admin/product_images/$relate_image' alt></a>
							</div>
							<h3>$relate_name</h3>
							<p class='product-price'>$relate_price VNĐ</p>
						</div>
					</div>";
                }
            }
        }
    }
}

//get IP address
function getIPAddress()
{
    //whether ip is from the share internet
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } //whether ip is from the proxy
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

//cart function

function cart()
{
    global $con;
    if (isset($_GET['add_to_cart'])) {
        $get_ip_address = getIPAddress();
        $get_product_id = $_GET['add_to_cart'];
        $select_query = "SELECT * FROM `cart_details` WHERE product_id = $get_product_id AND ip_address = '$get_ip_address'";
        $result_select = mysqli_query($con, $select_query);
        $number = mysqli_num_rows($result_select);
        if ($number > 0) {
            echo "<script>alert('This item had already in your cart!')</script>";
        } else {
            // Insert into cart_details table
            $insert_query = "INSERT INTO `cart_details` (product_id, ip_address, quantity) VALUES ($get_product_id, '$get_ip_address', 1)";
            $result_insert_query = mysqli_query($con, $insert_query);
            if ($result_insert_query)
                echo "<script>alert('Add item successfully!')</script>";
            else {
                // Print the error message
                echo "Error: " . mysqli_error($con);
            }
        }
    }
}

function cart_item()
{
    global $con;
    if (isset($_GET['add_to_cart'])) {
        $get_ip_address = getIPAddress();
        $select_query = "SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_address'";
        $result_select = mysqli_query($con, $select_query);
        $number = mysqli_num_rows($result_select);
    }
    else {
            global $con;
            $get_ip_address = getIPAddress();
            $select_query = "SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_address'";
            $result_select = mysqli_query($con, $select_query);
            $number = mysqli_num_rows($result_select);
    }
    echo $number;
}

function total_cart_price(){
    global $con;
    $get_ip_address = getIPAddress();
    $total = 0;
    $cart_query = "SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_address'";
    $result = mysqli_query($con, $cart_query);
    while ($row = mysqli_fetch_array($result)){
        $product_id = $row['product_id'];
        $product_quantity = $row['quantity'];
        $select_products = "Select * from `products` where product_id=$product_id";
        $result_products = mysqli_query($con, $select_products);
        while($row_product_price=mysqli_fetch_array($result_products)){
            $product_price = array($row_product_price['product_price']);
            $product_values = array_sum($product_price);
            $total += $product_values * $product_quantity;
        }
    }
    $totalCartPrice = $total;
    echo $total;
}
function update_cart()
{
    global $con;
    $get_ip_address = getIPAddress();
    if (isset($_POST['update_cart'])) {
        foreach ($_POST as $key => $value) {
            if (strpos($key, 'qty_') !== false) {
                $product_id = str_replace('qty_', '', $key);
                $quantity = $_POST[$key];
                $update_cart = "UPDATE `cart_details` SET quantity = $quantity WHERE ip_address = '$get_ip_address' AND product_id = $product_id";
                $result_products_quantities = mysqli_query($con, $update_cart);
            }
        }
    }
}

function getCartItemInfo()
{
    global $con;
    $get_ip_address = getIPAddress();
    $cart_query = "SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_address'";
    $result = mysqli_query($con, $cart_query);
    $result_count = mysqli_num_rows($result);
    if(!$result_count){
        echo "
                <img style='width: 100%; padding: 10px' src='https://th.bing.com/th/id/R.afa6a28d0ee0b5e7d55b7a5aecdfedec?rik=eOl3Z%2bU0XvmYlw&riu=http%3a%2f%2fiticsystem.com%2fimg%2fempty-cart.png&ehk=0omil1zRH7T3Pb5iTzvueamUQLSSb55vgY7dLFF8Bl8%3d&risl=&pid=ImgRaw&r=0'>
            ";
    }
    else
    {
        while ($row = mysqli_fetch_array($result)){
            $product_id = $row['product_id'];
            $product_quantity = $row['quantity'];
            $select_products = "Select * from `products` where product_id=$product_id";
            $result_products = mysqli_query($con, $select_products);
            while($row_product_price=mysqli_fetch_array($result_products)){
                $product_price = array($row_product_price['product_price']);
                $product_table = $row_product_price['product_price'];
                $product_title = $row_product_price['product_title'];
                $product_image = $row_product_price['product_image'];
                $product_values = array_sum($product_price) * $product_quantity;
                echo "<tr class='table-body-row'>
                        <td class='product-remove'><a href='cart.php?remove_id=$product_id'><i class='far fa-window-close'></i></a></td>
                        <td class='product-image'><img src='admin/product_images/$product_image'></td>
                        <td class='product-name'>$product_title</td>
                        <td class='product-price'>$product_table</td>
                        <td class='product-quantity'><input type='number' min='0' value='$product_quantity' name='qty_$product_id' class='text-center'></td>
                        <td class='product-total'>$product_values</td>
                        <td><input type='submit' class='btn-info btn-rounded' value='Cập nhật' name='update_cart'></td>
                </tr>";
            }
        }
    }
}

function remove_cart_item()
{
    global $con;
    $get_ip_address = getIPAddress();
    if(isset($_GET['remove_id'])){
        $product_id = $_GET['remove_id'];
        $remove_cart = "DELETE from `cart_details` WHERE ip_address = '$get_ip_address' AND product_id = $product_id";
        $result_remove_product = mysqli_query($con, $remove_cart);
        if ($result_remove_product){
            echo "<script>window.open('cart.php','_self')</script>";
        }
    }
}

function get_user_order_details()
{
    global $con;
    $username = $_SESSION['username'];
    $get_details = "Select * from `user_table` where username='$username'";
    $result_query = mysqli_query($con, $get_details);
    while ($row_query=mysqli_fetch_array($result_query)){
        $userid = $row_query['user_id'];
        if (!isset($_GET['edit_account'])){
            if (!isset($_GET['my_orders'])){
                $get_orders = "Select * from `user_orders` where user_id='$userid' and order_status='pending'";
                $result_user_orders_query = mysqli_query($con, $get_orders);
                $row_count = mysqli_num_rows($result_user_orders_query);
                if ($row_count > 0)
                {
                    echo "<h3>You have <span class='text-warning'>$row_count</span> pending orders</h3>";
                }
                else
                {
                    echo "<h3>No <span class='text-danger'>pending</span> orders</h3>";
                    echo "<a class='text-info' href='../shop.php'>Explore more</a>";
                }
            }
        }
    }
}