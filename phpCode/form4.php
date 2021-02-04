<!DOCTYPE html>
<html>
    <head>
        <title>Form4</title>
        <!-- <script src="js4.js"></script> -->
        <style>
            #first{
                background-color: rgb(230, 92, 0);
                height: 80px;
                width: 410px;
                border:0;
                text-align:center;
                border-radius: 10px 10px 0px 0px;
                color:white;
            }
            h2{
                font-size:30px;
                padding: 20px 10px 10px 10px;
            }
            input[type="text"],input[type="password"]{
                background-color: whitesmoke;
                border: 0;
                height: 40px;
                width: 350px;
                padding-left:20px;
            }
            textarea{
                border: 0;
                background-color:whitesmoke;
                padding-left:20px;
                padding-top:10px;
            }
            input[type="submit"]{
                background-color:rgb(255, 214, 51);;
                border: 0;
                font-size:28px;
                font-family:"serif";
                color: black;
                width:410px;
                height:70px;
                border-radius:0px 0px 10px 10px;
            }
            #second{
                background-color:rgb(255, 236, 179);
                height:320px;
                width:390px;
                border:0;
                padding: 20px 0px 0px 20px;
            }
            
            body{
                
                padding-left: 32%;
            }
        </style>
    </head>
    <body>
        <div id="outside">
            <div id="first">
                <h2>CONTACT US!</h2>
            </div>
            <form action="form4.php" method="POST" name="form" onsubmit="return checkelement();">
                <div id="second">
                    <input type="text" name="name" placeholder="Name..."><br><br>
                    <input type="text" name="email" placeholder="Email..."><br><br>
                    <input type="text" name="subject" placeholder="Subject..."><br><br>
                    <textarea rows="5" cols="46" name="msg" placeholder="Message..."></textarea>
                </div>
                <input type="submit" name="submit" value="SEND MESSAGE">
            </form>
        </div>
    </body>
</html>


<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['msg'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $msg = $_POST['msg'];
            if(!empty($name) && !empty($email) && !empty($subject) && !empty($msg)){
                echo '<br><br><b>Your Input:</b><br>';
                echo '<br>Name: '.$name;
                echo '<br>Email: '.$email;
                echo '<br>subject: '.$subject;
                echo '<br>Message: '.$msg;
            }
        }
    }



?>