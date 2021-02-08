<?php
 
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_hash = md5($password);

    if(!empty($username) && !empty($password)){
        $query="SELECT `id` FROM `users` WHERE `username`='$username' AND `password`='$password_hash'";
        if($query_run=mysqli_query($link,$query)){
             $query_num_row = mysqli_num_rows($query_run);
            if($query_num_row == 0){
                echo 'Invalid Username/Password';
            }else if($query_num_row == 1){
                $user_id = mysqli_fetch_assoc($query_run)['id'];
                $_SESSION['user_id'] = $user_id;
                header('Location:index7.php');
            }
        }
    }else{
        echo 'You must supply username and password.';
    }
}


?>

<form action="<?php echo $current_file; ?>" method="POST">
    <input type="text" name="username" placeholder="Username"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <input type="submit" value="Log in">
</form>
