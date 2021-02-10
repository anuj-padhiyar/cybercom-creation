<?php
include 'core.php';
include 'conn.php';

if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = md5($password);

    if(!empty($email) && !empty($password_hash)){
        $query="SELECT `id` FROM `user` WHERE `email`='$email' AND `password_hash`='$password_hash'";
        if($query_run=mysqli_query($link,$query)){
             $query_num_row = mysqli_num_rows($query_run);
            if($query_num_row == 0){
                echo 'Invalid Username/Password';
            }else if($query_num_row == 1){
                $user_id = mysqli_fetch_assoc($query_run)['id'];
                $_SESSION['user_id'] = $user_id;
                header('Location: dashboard.php');
            }else{
                die("Error");
            }
        }
    }else{
        echo 'You must supply Email and password.';
    }
}


?>


<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <h1>Login</h1>
        <form action="<?php echo $current_file; ?>" method="POST">
            Email<br><input type="text" name="email"><br><br>
            Password<br><input type="password" name="password"><br><br>
            <input type="submit" value="Log in">
            <a href="register.php">Register</a>
        </form>
    </body>
</html>