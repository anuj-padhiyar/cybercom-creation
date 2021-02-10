<?php

include 'core.php';
include 'conn.php';

if(!loggedin()){
    header("Location:login.php");
}
?>


<html>
    <head>
        <title>Add Blog Post</title>
    </head>
    <body>
        <h2>Add New Blog Post</h2>
        <form action="<?php echo $current_file; ?>" method="POST">
            Title<br><input type="text" name="title"><br><br>
            content<br><textarea rows="5" cols="40"></textarea><br><br>
            URL<br><input type="text" name="url"><br><br>
            Published At<br><input type="datetime-local" name="title"><br><br>
            Category<br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>