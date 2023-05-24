<?php
include("./include/connect.php");

function getProducts(){
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
                        <a href='cart.html' class='cart-btn'><i class='fas fa-shopping-cart'></i> Add to Cart</a>
                        </div>
                    </div>";
        }
}

//function getUniqueCategory(){
//    global $con;
//        $category_id = $_GET['category'];
//        $select_query = "Select * from `products`";
//        $result_query = mysqli_query($con, $select_query);
//        $numRow = mysqli_num_rows($result_query);
//        if($numRow == 0) {
//            echo "<h2 class='text-center m-auto'>Nothing here.</h2>";
//        }
//        else
//        {
//            while ($row = mysqli_fetch_assoc($result_query)) {
//                $product_id = $row['product_id'];
//                $product_title = $row['product_title'];
//                $product_description = $row['product_description'];
//                $product_keywords = $row['product_keywords'];
//                $category_id = $row['category_id'];
//                $product_image = $row['product_image'];
//                $product_price = $row['product_price'];
//                $date = $row['date'];
//                $status = $row['status'];
//                echo "
//						<div class='col-lg-4 col-md-6 text-center $category_id'>
//							<div class='single-product-item'>
//								<div class='product-image'>
//									<a href='single-product.php'><img src='./admin/product_images/$product_image' alt=''></a>
//								</div>
//							<h3>$product_title</h3>
//							<p class='product-price'><span>Per Kg</span> $product_price VNĐ </p>
//							<a href='cart.html' class='cart-btn'><i class='fas fa-shopping-cart'></i> Add to Cart</a>
//							</div>
//						</div>";
//            }
//        }
//}

function getCategories(){
    global $con;
    $select_categories = "Select * from `categories`";
    $result_categories = mysqli_query($con, $select_categories);
    while ($row_data = mysqli_fetch_assoc($result_categories)){
        $category_title = $row_data['name'];
        $category_id = $row_data['id'];
        echo "<li data-filter='.$category_id'>$category_title</li>";
    }
}

function searchProduct()
{
    global $con;
    if(isset($_GET['search_data_product'])) {
        $search_data_value = $_GET['search_data'];
        $search_query = "Select * from `products` where product_keywords like '%$search_data_value%'";
        $result_query = mysqli_query($con, $search_query);
        $num_of_row = mysqli_num_rows($result_query);
        if ($num_of_row == 0)
        {
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
							<a href='cart.html' class='cart-btn'><i class='fas fa-shopping-cart'></i> Add to Cart</a>
							</div>
						</div>";
        }
    }
}

function viewDetails(){
    global $con;
    if (isset($_GET['product_id'])){
        if (!isset($_GET['category']))
        {
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
							<p class='single-product-pricing'><span>Per Kg</span>$product_price</p>
							<p>$product_description</p>
							<div class='single-product-form'>
								<form action='index.php''>
									<input type='number' placeholder='0'>
								</form>
								<a href='cart.html' class='cart-btn'><i class='fas fa-shopping-cart'></i>
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

function viewRelatedProduct(){
    global $con;
    if (isset($_GET['product_id'])){
        if (!isset($_GET['category']))
        {
            $product_id = $_GET['product_id'];
            $select_query = "Select * from `products` where product_id='$product_id'";
            $result_query = mysqli_query($con, $select_query);
            while ($row = mysqli_fetch_assoc($result_query)) {
                $product_id = $row['product_id'];
                $category_id = $row['category_id'];
                $select_related_product = "Select * from `products` where product_id!='$product_id' and category_id ='$category_id'";
                $result = mysqli_query($con, $select_related_product);
                while($relate = mysqli_fetch_assoc($result))
                {
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
							<p class='product-price'>$relate_price</p>
						</div>
					</div>";
                }
            }
        }
    }
}