<?php

if($_SERVER["REQUEST_METHOD"] == "POST"  && isset($_POST['submit'])) {
    echo "hii";
    if(isset($_POST['title']) && isset($_POST['content']) && isset($_POST['url']) && isset($_POST['p_category']) && isset($_POST['image'])){
        $title = $_POST['title'];
        $content = $_POST['content'];
        $url = $_POST['url'];
        $p_category = $_POST['p_category'];
        //$image = $_POST['image'];

        if(!empty($title) && !empty($content) && !empty($url) && !empty($p_category) && !empty($image)){
            echo $query = "INSERT INTO `category`(`title`, `meta_title`, `image`, `url`, `content`) VALUES ('$title','$p_category','$url','$content')";
            if(mysqli_query($link,$query)){
                $_SESSIO['user_id'] = mysqli_insert_id($link);
                header("Location:blogcategory.php");
            }else{
                echo "Opps! Got an Error!!";
            }
        }else{
            echo "Please Fill All The Fields!!";
        }
    }
}

?>


<html>
    <head>
        <title>Add Category</title>
    </head>
    <body>
        <h2>Add New Category</h2>
        <form action="<?php echo $current_file; ?>" method="POST" enctype="multipart/form-data">
            Title<br><input type="text" name="title"><br><br>
            Content<br><textarea rows="5" cols="40" name="content"></textarea><br><br>
            URL<br><input type="text" name="url"><br><br>
            Meta Title<br>
            <select name="p_category">
                <option value="education">Education</option>
                <option value="helth">Helth</option>
                <option vlue="lifestyle">Lifestyle</option>
            </select><br><br>
            Image<input type="file" name="image"><br><br>
            <input type="submit" value="Submit" name="submit">
        </form>
    </body>
</html>