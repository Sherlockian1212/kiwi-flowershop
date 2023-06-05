<?php
include('../include/connect.php');
include('../function/common_functions.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Admin Dashboard</title>
    <style>
        .admin-image{
            width: 100px;
            height: 100px;
            vertical-align: middle;
            border-radius: 50%;
        }
        .bg-whiteSmoke{
            background-color: #e5e5e5;
        }
        .product_img{
            width: 15%;
            object-fit: contain;
        }
    </style>
</head>
<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-pink">
            <div class="container-fluid">
                <img src="../assets/img/logo.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg navbar-light bg-pink">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Admin</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <div class="row">
            <div class="col-md-12 bg-whiteSmoke p-1 d-flex align-items-center justify-content-around">
                <div class="p-3">
                    <a href="#"><img class="admin-image" src="https://firebasestorage.googleapis.com/v0/b/kiwi-flowers.appspot.com/o/Mine1.jpg?alt=media&token=4484dee4-75a8-4f71-8d3a-f0ade5e2438c" alt=""></a>
                    <p class="text-center text-info font-weight-bold m-0">Mạnh Tường</p>
                </div>
                <div class="button text-center">
                    <button class="border-0 rounded"><a href="addProduct.php" class="nav-link text-light bg-info m-0">Add Product</a>
                    </button>
                    <button class="border-0 rounded"><a href="index.php?view_products" class="nav-link text-light bg-info m-0">View Products</a>
                    </button>
                    <button class="border-0 rounded"><a href="index.php?add_category" class="nav-link text-light bg-info m-0">Add Categories</a>
                    </button>
                    <button class="border-0 rounded"><a href="index.php?view_categories" class="nav-link text-light bg-info m-0">View Categories</a>
                    </button>
                    <button class="border-0 rounded"><a href="index.php?list_orders" class="nav-link text-light bg-info m-0">All Orders</a>
                    </button>
                    <button class="border-0 rounded"><a href="index.php?list_users" class="nav-link text-light bg-info m-0">Users Lists</a>
                    </button>
                    <button class="border-0 rounded"><a href="index.php?list_payments" class="nav-link text-light bg-info m-0">Payments</a>
                    </button>
                    <button class="border-0 rounded"><a href="admin_login.php" class="nav-link text-light bg-info m-0">Log out</a>
                    </button>
                </div>
            </div>
        </div>

        <div class="container">
            <?php
                if(isset($_GET["add_category"])){
                    include("addCategories.php");
                }
                if(isset($_GET["view_products"])){
                    include("view_products.php");
                }
                if(isset($_GET["edit_products"])){
                    include("edit_products.php");
                }
                if(isset($_GET["delete_products"])){
                    include("delete_product.php");
                }
                if(isset($_GET["view_categories"])){
                    include("view_categories.php");
                }
                if(isset($_GET['edit_category'])){
                    include('edit_category.php');
                }
                if(isset($_GET['delete_category'])){
                    include('delete_category.php');
                }
                if(isset($_GET['list_orders'])){
                    include('list_orders.php');
                }
                if(isset($_GET['delete_orders'])){
                    include('delete_orders.php');
                }
                if(isset($_GET['list_payments'])){
                    include('list_payments.php');
                }
                if(isset($_GET['delete_payments'])){
                    include('delete_payments.php');
                }
                if(isset($_GET['list_users'])){
                    include('list_users.php');
                }
                if(isset($_GET['delete_users'])){
                    include('delete_users.php');
                }
                ?>
        </div>
    </div>
</body>
</html>