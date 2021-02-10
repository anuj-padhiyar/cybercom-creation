<?php
include 'core.php';
include 'conn.php';

if(loggedin()){
    $query = "SELECT * FROM `blog_post` WHERE 1";
    $result = mysqli_query($link,$query);
}else{
   header("Location:login.php");
}

?>


<html>
    <head>
        <title>Dashboard</title>
    </head>
    <body>
        <a href="blogcategory.php">Manage Category</a>
        <a href="dashboard.php">My Profile</a>
        <a href="logout.php">Logout</a>
        <h2>Blog Posts</h2>
        <a href="addblogpost.php" class="">Add Blog Post</a><br><br><br>
        <table style="border:2px solid black">
            <tr>
                <th>Post Id</th>
                <th>Category Name</th>
                <th>Title</th>
                <th>Published Date</th>
                <th>Actions</th>
            </tr>

            <?php while($row = mysqli_fetch_array($result)){ ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['meta_title']; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['create_at']; ?></td>
                <td>Update/Delete</td>
            </tr> 

            <?php } ?>

        </table>
    </body>
</html>