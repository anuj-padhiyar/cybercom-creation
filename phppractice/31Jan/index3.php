<?php

//more on expression matching
/* function has_space($string){
    if(preg_match('/ /',$string)){
        return true;
    }
    else{
        return false;
    }
}
if(has_space('This doesnthavespace')){
    echo 'Has at least one space.';
}else{
    echo 'Has no space';
}

//Upper lower case
echo '<br>'.strtolower('Hello Friends!!');
echo '<br>'.strtoupper('Hello Friends!!').'<br>';

if(isset($_GET['user_name']) && !empty($_GET['user_name'])){
    $user_name = $_GET['user_name'];
    $user_name_lc = strtolower($user_name);
}
echo 'You Are Best, '.$user_name_lc.'<br>';

//string position
$string = 'This is a string and it is an example of position.';
$find = 'string';
echo strpos($string, $find).' ';        //find is form string and return index of it
echo strpos($string, $find,10).'<br>';         //same thing as above but start after 10 char of the string

$find_length = strlen($find);
$offset = 0;
while ($string_position = strpos($string, $find, $offset)) {
    echo '<strong>'.$find.'</strong> found at '.$string_position.'<br>';
    $offset = $string_position + $find_length;
}

//replace substring
$string = "This part don't search. This part search";
echo substr_replace($string, 'alex', 29, 4).'<br>';

//replace string
$find = array('is', 'string', 'example');
$replace = array('IS','STRING', 'EXAMPLE');
$string = 'This is a string, ans is an example.';
$new_string = str_replace($find, $replace, $string);
echo $new_string.'<br>';

//word censoring
$find = array('alex', 'billy', 'dale');
$replace = array('a**x', 'b***y', 'd**e');
if(isset($_POST['user_input']) && !empty($_POST['user_input'])){
    $user_input = $_POST['user_input'];
    echo $user_input_new = str_ireplace($find, $replace,  $user_input);
}
echo '<br><br>';

//find and replace application
$offset = 0;
if(isset($_POST['user_input']) && isset($_POST['searchfor']) && isset($_POST['replacewith'])){
    $text=$_POST['user_input'];
    $search = $_POST['searchfor'];
    $replace = $_POST['replacewith'];
    $search_length = strlen($search);

    if(!empty($text) && !empty($search) && !empty($replace)){
        while ($strpos = strpos($text, $search, $offset)) {
            $offset = $strpos + $search_length.'<br>';
            $text = substr_replace($text, $replace, $strpos, $search_length);
        }
        echo $text.'<br>';
    }else{
        echo 'Please Fill in all fields.<br>';
    }
}

//time stamp
$time =time();
$time_now = date('d M Y @ H:i:s',$time);
$time_modified = date('d M Y @ H:i:s',strtotime('+1 week 2 hours 20 minutes 30 seconds'));
$time_modified_new = date('d M Y @ H:i:s',$time + (7*24*3600+2*3600+20*60+30));
echo 'The time now is '.$time_now.'<br>The time modified is '.$time_modified.'<br>The time modified new is '.$time_modified_new;
echo '<br><br>';

//generate random number
$rand = rand();
$max = getrandmax();
echo $rand.'/'.$max.'<br>';
if(isset($_POST['roll'])){
    $rand = rand(1,6);
    echo 'You rolled '.$rand.'.<br>';
}

//$_SERVER
$script_name = $_SERVER['SCRIPT_NAME'];
echo $script_name;
echo '<br>';


include 'header3.inc.php';
if(isset($_POST['sub'])){
    echo 'Process 1';
} 
echo $_SERVER['HTTP_HOST']; */

//header
$redirect_page = 'http://google.com';
$redirect = false;
if($redirect==true){
    header('Location: '.$redirect_page);
}else{
    echo 'This is my page<br>';
}

//Ip address
/* $ip_address = $_SERVER['REMOTE_ADDR'];
    $ip_blocked = array('127.0.0.1','100.100.100.100');
foreach($ip_blocked as $ip){
    if($ip == $ip_address){
        die('Your ip address '.$ip.' is blocked');
    }
} */

//other way to get ip address
$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
$remote_addr = $_SERVER['REMOTE_ADDR'];

if(!empty($http_client_ip)){
    $ip_address = $http_client_ip;
}else if(!empty($http_x_forwarded_for)){
    $ip_address = $http_x_forwarded_for;
}else{
    $ip_address = $remote_addr;
}
echo $ip_address.'<br>';

//browser detecting
$browser = get_browser(null,true);
echo $browser['browser'];

?>

<!-- <hr>
<form action="index3.php" method="GET">
    Name : <input type="text" name='user_name'>
    <input type="submit" value = "Submit">
</form><hr>
<form action="index3.php" method="POST">
    <textarea name="user_input" rowa="6" cols="30"></textarea><br><br>
    Search for:<br>
    <input type = "text" name="searchfor"><br><br>
    Replace with:<br>
    <input type = "text" name="replacewith"><br><br>
    <input type="submit" name='roll' value="Submit">
</form> -->