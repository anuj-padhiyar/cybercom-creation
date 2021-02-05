<?php
    
//read xml 
/*  $xml = simplexml_load_file('example.xml');
//echo $xml->producer[1]->name.' '.$xml->producer[1]->age;
foreach($xml->producer as $producer){
    echo $producer->name.' '.$producer->age.'<br>';
}
echo '<br><br>';

foreach($xml->producer as $producer){
    echo $producer->name.' ('.$producer->age.')<br>';
    foreach($producer->show as $show){
        echo $show->showname.' on '.$show->showdate.'<br>';
    }
} */

//Database connetion
require 'connect.inc.php';

?>


<!-- <form action="index6.php" method="GET">
    <select name="uh">
        <option value="n">Unhealthy</option>
        <option value="y">Healthy</option>
    </select><br><br>
    <input type="submit" value="Submit">
</form> -->


<?php

// if(isset($_GET['uh']) && !empty($_GET['uh'])){
//     $uh = strtolower($_GET['uh']);
//     if($uh == 'n' || $uh == 'y'){
//         $query = "SELECT `food`,`calories` FROM `food` WHERE `healthy`='$uh' ORDER BY `id` DESC";
//         if($query_run = mysqli_query($link,$query)){
//             if(mysqli_num_rows($query_run)==NULL){
//                 echo 'No results found.';
//             }else{
//                 while($query_row = mysqli_fetch_assoc($query_run)){
//                     $food = $query_row['food'];
//                     $calories = $query_row['calories'];
//                     echo $food.' has '.$calories.' calories.<br>';
//                 }
//             }   
//         }else{
//             echo mysqli_error($link);
//         }
//     }else{
//         echo 'Must be y or n';
//     }
// }

?>


<?php

//hit count
$user_ip = $_SERVER['REMOTE_ADDR'];

function ip_exists($ip){
    global $link;
    global $user_ip;
    $query = "SELECT `ip` FROM `hits_ip` WHERE `ip` = '$user_ip'";
    $query_run = mysqli_query($link, $query);
    $query_num_rows = mysqli_num_rows($query_run);
    if($query_num_rows==0){
        return false;
    }else if($query_num_rows>=1){
        return true;
    }
}

function ip_add($ip){
    global $link;
    $query = "INSERT INTO `hits_ip` VALUES ('$ip')";
    $query_run = mysqli_query($link, $query);
}

function update_count(){
    global $link;
    $query = "SELECT `count` FROM `hits_count`";
    if($query_run = mysqli_query($link,$query)){
        $row = mysqli_fetch_assoc($query_run);
        $count = $row['count'];
        $count_inc = $count+1;

        $query_update = "UPDATE `hits_count` SET `count`='$count_inc'";
        $query_update_run = mysqli_query($link,$query_update);
    }
}

if(!ip_exists($user_ip)){
    update_count();
    ip_add($user_ip);
}
?>