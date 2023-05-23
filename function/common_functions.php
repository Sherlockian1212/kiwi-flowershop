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
						<div class='col-lg-4 col-md-6 text-center 1'>
							<div class='single-product-item'>
								<div class='product-image'>
									<a href='single-product.html'><img src='./admin/product_images/$product_image' alt=''></a>
								</div>
							<h3>$product_title</h3>
							<p class='product-price'><span>Per Kg</span> $product_price VNĐ </p>
							<a href='cart.html' class='cart-btn'><i class='fas fa-shopping-cart'></i> Add to Cart</a>
							</div>
						</div>";
    }
}

function getCategories(){
    global $con;
    $select_categories = "Select * from `categories`";
    $result_categories = mysqli_query($con, $select_categories);
    while ($row_data = mysqli_fetch_assoc($result_categories)){
        $category_title = $row_data['name'];
        $category_id = $row_data['id'];
        echo "<li data-filter='.$category_id'> 
										<a href='shop.php?category=$category_id' class='p-0 m-0 text-dark'>$category_title</a>
									</li>";
    }
}