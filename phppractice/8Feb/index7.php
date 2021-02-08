<?php

/* include 'connect.inc.php';
if(isset($_POST['search_name'])){
    $search_name = $_POST['search_name'];
    if(!empty($search_name)){
        if(strlen($search_name)>=4){

            $query = "SELECT `name` FROM `names` WHERE `name` LIKE '%".$search_name."%'";
            $query_run = mysqli_query($link, $query);
            $query_num_row = mysqli_num_rows($query_run);

            if($query_num_row>=1){
                echo $query_num_row.' Results Found :<br>';
                while($query_row = mysqli_fetch_assoc($query_run)){
                    echo $query_row['name'].'<br>';
                }
            }else{
                echo 'No Result Found.';
            }
        }else{
            echo 'Your Keyword must be 4 character or more';
        }
    }
} */

require 'core.inc.php';
require 'connect.inc.php';

if(loggedin()){ 
    $firstname = getuserfield('firstname');
    $lastname = getuserfield('lastname');
    echo 'You\'re logged in, ' .$firstname.' '.$lastname.'. <a href="logout.php">Logout</a><br>';
}else{
    include 'loginform.inc.php';
}



?>

<!-- <form action="index7.php" method="POST">
    <input type="text" name="search_name" placeholder="Name"><br><br>
    <input type="submit" value="Search">
</form> -->