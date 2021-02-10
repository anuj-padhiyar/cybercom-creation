<?php
include 'core.php';
include_once 'conn.php';
?>


<html>
    <head>
        <title>Register Page</title>
    </head>
    <body>
        <h1>Register</h1>
        <form action="<?php echo $current_file; ?>" method="POST">
            Prefix
            <select name="prefix">
                <option value="select" disabled selected>--select--</option>
                <option value="Mr">Mr</option>
                <option value="Ms">Ms</option>
                <option value="Mrs">Mrs</option>
            </select><br><br>
            First Name<br><input type="text" name="firstname"><br><br>
            Last Name<br><input type="text" name="lastname"><br><br>
            Email<br><input type="text" name="email"><br><br>
            Mobile Number<br><input type="text" name="number"><br><br>
            Password<br><input type="password" name="password"><br><br>
            Confirm Password<br><input type="password" name="confirmpassword"><br><br>
            Information<br><textarea rows="5" cols="50" name="information"></textarea><br><br>
            <input type="checkbox" name="tnc"> Here, I Accept Term & Condition<br><br>
            <input type="submit" value="Log in" name="submit">
            <a href="register.php">Register</a>
        </form>
    </body>
</html>


<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"  && isset($_POST['submit'])) { 
        if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['number']) && isset($_POST['password']) && isset($_POST['confirmpassword']) && isset($_POST['information']) && isset($_POST['tnc']) && isset($_POST['prefix'])){
            $prefix = $_POST['prefix'];
            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $phone = $_POST['number'];
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $pass2 = $_POST['confirmpassword'];
            $info = $_POST['information'] ;

            $qforemail = "SELECT * FROM `user` WHERE `email`='$email'";
            $res=mysqli_query($link,$qforemail);
            if(mysqli_num_rows($res)>0){
                echo "EmailID Already Registered";
            }else{
                if(!empty($prefix) && !empty($fname) && !empty($lname) && !empty($email) && !empty($phone) && (strlen($phone)==10) && !empty($pass) && !empty($pass2) && ($pass == $pass2) && !empty($info)){
                    $pass_hash = md5($pass);
    
                    $query = "INSERT INTO `user`(`prefix`, `first_name`, `last_name`, `mobile`, `email`, `password_hash`,`information`) 
                                VALUES ('$prefix','$fname','$lname','$phone','$email','$pass_hash','$info')";    
                    if(mysqli_query($link,$query)){
                        $_SESSIO['user_id'] = mysqli_insert_id($link);
                        header("Location:dashboard.php");
                    }else{
                        echo "Opps! Got an Error!!";
                    }
                }else{
                    echo "Fill All The Fields";
                }
            }
        }
    }
?>