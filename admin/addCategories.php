<?php
global $con;
include('../include/connect.php');
    if (isset($_POST['insert_cat'])){
        $category_title = $_POST['cat_title'];
        $select_query = "Select * from `categories` where name='$category_title'";
        $result_select = mysqli_query($con, $select_query);
        $number = mysqli_num_rows($result_select);
        if ($number > 0)
        {
            echo "<script>alert('This category was represented in database')</script>";
        }
        else
        {
            $insert_query = "insert into `categories` (name) values ('$category_title')";
            $result = mysqli_query($con, $insert_query);
            if ($result){
                echo "<script>alert('Add category successfully!')</script>";
            }
            else
                echo "Error: " . mysqli_error($con);
        }
    }
?>
<h3 class="text-center text-grey p-2">Add Category</h3>
<form action="" method="post" class="mb-2 mt-2">
    <div class="input-group w-90 mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-bars"></i></span>
        </div>
        <input type="text" class="form-control" name="cat_title" placeholder="Insert categories" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group w-10 mb-2">
        <input type="submit" class="form-control bg-info text-light" name="insert_cat" value="Insert Categories" placeholder="Insert categories" aria-label="Username" aria-describedby="basic-addon1">
    </div>
</form>