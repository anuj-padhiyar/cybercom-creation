<html>
    <head>
        <title>Form 5</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="js5.js"></script>
        <style>
            #sign{
                background-color: rgb(253, 87, 87);
                height: 60px;
                width: 400px;
                border:0;
                border-radius: 20px 20px 0px 0px;
                color:white;
            }
            input[type="text"],input[type="password"]{
                background-color: whitesmoke;
                border: 0;
                height: 30px;
                width: 350px;
            }
            input[type="submit"]{
                border: 0;
                width: 100px;
                height: 30px;
                background-color: rgb(71, 179, 71);
                color: white;
                font-size: 18;
                border-radius: 5px;
                margin-left: 30%;
                margin-top: 3%;
            }
            div ~ div{
                background-color:white;
                height: 250px;
                width:400px;
                border:0;
                border-radius: 0px 0px 20px 20px;
            }
            form{
                padding:15px 0px 10px 20px;
            }
            span{
                padding: 0px 0px 0px 10px;
                display: inline;
                font-size: 30;
            }
            body{
                background-color: rgba(150, 146, 146, 0.993);
                padding-left: 32%;
                padding-top: 5%;
            }
            label{
                font-size: large;
            }
            i{
                padding-top: 20px;
                padding-left: 20px;
                display: inline;
            }
        </style>
    </head>
    <body>
        <div id="outside">
            <div id="sign">
                <i class="material-icons">lock</i><span>Sign In</span>
            </div>
            <div>
                <form action="form5.php" method="POST" name="form" onsubmit="return checkelement();">
                    <label for="email">E-mail address</label><br><br>
                    <input type="text" name="email" placeholder="mail@address.com"><br><br>
                    <label for="password">password</label><br><br>
                    <input type="password" name="pass" placeholder="********"><br><br>
                    <input type="submit" name="submit" value="Sign In">
                </form>
            </div>
        </div>
    </body>
</html>


<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){
        if(isset($_POST['email']) && isset($_POST['pass'])){
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            if(!empty($email) && !empty($pass) && strlen($pass)>=8){
                echo '<br><h2>Your Input:</h2><br>';
                echo '<br>Email: '.$email;
                echo '<br>Password: '.$pass;
            }
        }
    }
?>