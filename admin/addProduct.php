<?php
global $con;
include('../include/connect.php');
if (isset($_POST['insert-product'])){
    $product_title = $_POST['product-title'];
    $product_description = $_POST['product-description'];
    $product_keywords = $_POST['product-keywords'];
    $product_categories = $_POST['product-categories'];
    $product_price = $_POST['product-price'];

    $product_image = $_FILES['product-image']['name'];
    $temp_product_image = $_FILES['product-image']['tmp_name'];
    $product_status = true;

    if($product_title == '' or $product_description == '' or $product_keywords == '' or $product_categories == '' or $product_price == '')
    {
        echo "<script>alert('Please fill out all the available fields')</script>";
        exit();
    }else{
        move_uploaded_file($temp_product_image, $product_image);

        //insert query
        $insert_product = "insert into `products` 
        (product_title, product_description, product_keywords, category_id, product_image, product_price, date, status)
        values ('$product_title', '$product_description', '$product_keywords', '$product_categories', '$product_image', '$product_price',
        NOW(), '$product_status')";
        $result_query = mysqli_query($con, $insert_product);
        if($result_query)
        {
            echo "<script>alert('Insert product successfully!')</script>";
            echo "<script>window.open('index.php', '_self')</script>";
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Add Product - Admin Dashboard</title>
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h2 class="text-center">Add Product</h2>
<!--        Name-->
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product-title" class="form-label">Product Name</label>
                <input type="text" name="product-title" id="product-title" class="form-control"
                    placeholder="Enter Product Name..."
                    autocomplete="off" required="required"
                >
            </div>
<!--            Description-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product-description" class="form-label">Product Description</label>
                <input type="text" name="product-description" id="product-description" class="form-control"
                       placeholder="Enter Product Description..."
                       autocomplete="off" required="required"
                >
            </div>
<!--            Keyword-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product-keywords" class="form-label">Product Keywords</label>
                <input type="text" name="product-keywords" id="product-keyword" class="form-control"
                       placeholder="Enter Product Keywords..."
                       autocomplete="off" required="required"
                >
            </div>
<!--            Categories-->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product-categories" id="" class="form-select">
                    <option value="">Select a category</option>
                    <?php
                        $select_query = "Select * from `categories`";
                        $result_query = mysqli_query($con, $select_query);
                        while($row=mysqli_fetch_assoc($result_query)){
                            $category_title = $row['name'];
                            $category_id = $row['id'];
                            echo "<option value='$category_id'>$category_title</option>";
                        }
                    ?>
                </select>
            </div>
<!--            Image-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product-image" class="form-label">Product Image</label>
                <input type="file" name="product-image" id="product-image" class="form-control"
                       required="required"
                >
            </div>
<!--            Price-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product-price" class="form-label">Product Price</label>
                <input type="number" name="product-price" id="product-price" class="form-control"
                       required="required"
                       placeholder="Enter Price..."
                >
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert-product" id="insert-product" class="btn btn-primary mb-3 px-3 text-light"
                >
            </div>
        </form>
    </div>
</body>
</html>