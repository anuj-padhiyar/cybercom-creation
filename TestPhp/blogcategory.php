<?php
include 'core.php';
include 'conn.php';

if(loggedin()){
    $query = "SELECT * FROM `category` WHERE 1";
    $result = mysqli_query($link,$query);
}else{
   header("Location:login.php");
}

?>


<html>
    <head>
        <title>Blog Category</title>
    </head>
    <body>
        <a href="blogcategory.php">Manage Category</a>
        <a href="dashboard.php">My Profile</a>
        <a href="logout.php">Logout</a>
        <h2>Blog Category</h2>
        <a href="addcategory.php" class="">Add Category</a><br><br><br>
        <table style="border:2px solid black">
            <tr>
                <th>Category Id</th>
                <th>Category Image</th>
                <th>Category Name</th>
                <th>Created Date</th>
                <th>Actions</th>
            </tr>

            <?php while($row = mysqli_fetch_array($result)){ ?>
            <tr>
                <td><?php echo $row['category_id']; ?></td>
                <td><?php echo $row['image']; ?></td>
                <td><?php echo $row['meta_title']; ?></td>
                <td><?php echo $row['created_at']; ?></td>
                <td>Update/Delete</td>
            </tr> 

            <?php } ?>

        </table>
    </body>
</html>