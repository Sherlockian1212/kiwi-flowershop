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
                    <button class="border-0 rounded"><a href="" class="nav-link text-light bg-info m-0">Add Product</a>
                    </button>
                    <button class="border-0 rounded"><a href="" class="nav-link text-light bg-info m-0">View Products</a>
                    </button>
                    <button class="border-0 rounded"><a href="index.php?add_category" class="nav-link text-light bg-info m-0">Add Categories</a>
                    </button>
                    <button class="border-0 rounded"><a href="" class="nav-link text-light bg-info m-0">View Categories</a>
                    </button>
                    <button class="border-0 rounded"><a href="" class="nav-link text-light bg-info m-0">All Orders</a>
                    </button>
                    <button class="border-0 rounded"><a href="" class="nav-link text-light bg-info m-0">Users Lists</a>
                    </button>
                    <button class="border-0 rounded"><a href="" class="nav-link text-light bg-info m-0">Payments</a>
                    </button>
                    <button class="border-0 rounded"><a href="" class="nav-link text-light bg-info m-0">Log out</a>
                    </button>
                </div>
            </div>
        </div>

        <div class="container">
            <?php
                if(isset($_GET["add_category"])){
                    include("addCategories.php");
                }
            ?>
        </div>
    </div>
</body>
</html>