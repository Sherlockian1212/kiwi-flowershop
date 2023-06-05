<h3 class="text-center text-grey mt-2">All Categories</h3>
<table class="table table-bordered mt-2">
    <thead class="bg-info text-white">
        <tr class="text-center">
            <th>Num</th>
            <th>Category ID</th>
            <th>Category Name</th>           
            <th>Edit</th>
            <th>Delete</th>
        </tr>  
    </thead>
    <tbody class="">
        <?php
        $number=0;
        $get_categories="select * from `categories`";
        $result=mysqli_query($con,$get_categories);
        while ($row=mysqli_fetch_assoc($result)){
            $category_id=$row['id'];
            $category_title=$row['name'];
            $number++;
        ?>
        <tr class='text-center'>
            <td><?php echo $number;?></td>
            <td><?php echo $category_id;?></td>
            <td><?php echo $category_title;?></td>
            <td><a href='index.php?edit_category=<?php echo $category_id?>' class='text-info'><i class='fa-solid fa-pen-to-square'></i></a></td>
            <td><a href='index.php?delete_category=<?php echo $category_id?>' class='text-danger'><i class='fa-solid fa-trash'></i></a></td>
        </tr>
    <?php
        }
    ?>
    </tbody>
</table>
