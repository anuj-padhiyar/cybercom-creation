<?php

//comparison operator
/* $num1 = 65;
$num2 = 20;
if($num1<$num2){
    echo 'Yes.';
}else{
    echo 'No.';
}

//arithmatic operators
$num3 = 4;
$res = ($num1 + $num2) / $num3;
echo $res;

//logical operator     {AND,OR,NOT}
if($num1<=1000 AND $num1>500){
    echo 'okay!';
}else{
    echo 'Number must be between 500 AND 1000.';
}

//triple equal
$snum = '4';
$num = 4;
if($snum === $num){
    echo 'Equal.';
}else{
    echo 'Not equal.';
} */

//while loop
/* $counter = 1;
while($counter<=10){
    echo $counter.' Hello<br>';
    $counter++;
}
echo '<br>';

//do while
$counter = 1;
do{
    echo 'This will always show<br>';
    $counter++;
}while($counter <= 5);
echo '<br>';

//for loop
for ($count=1 ; $count<=3 ; $count++){
    echo $count.'<br>';
} */


//switch statement
/* $number = 5;
switch($number){
    case 1:echo 'One';
        break;
    case 2:echo 'Two';
        break;
    case 3:echo 'Three';
        break;
    default:echo 'Number not found.';
        break;
}

//die and exit
echo 'Hello ';
die('Error in loading');    //same we can use exit
echo 'World'; */

//Expression Matching
/* $str = 'This is a string.';
if(preg_match('/str/',$str)){
    echo 'Matched<br>';
}else{
    echo 'not matched<br>';
}

//basic functions
function Greeting(){
        echo 'hello';
}
Greeting();
echo ' Friends<br>';

//function with argument
function add($a,$b){
    echo $a+$b;
}
add(3,7);
echo '<br>';

//function with return values
function add1($num1,$num2){
    $result = $num1 + $num2;
    return $result;
}
function div($num1,$num2){
    $result = $num1 / $num2;
    return $result;
}
$val = div(add1(10,10),add1(5,5));
echo $val; 

//global variable and functions
$user_ip = $_SERVER['REMOTE_ADDR'];
function echo_ip(){
    global $user_ip;
    echo 'Your IP address is '.$user_ip;
}
echo_ip(); */

//string functions
/* $string = 'This is an example string .';

//0=>total word
//1=>array of words
//2=>array of position of first character of word
echo str_word_count($string,0);
echo '<br>';
print_r(str_word_count($string,1));
echo '<br>';
print_r(str_word_count($string,2));
echo '<br>';
print_r(str_word_count($string,1,'.'));   //that shows . is also word
echo '<br>';
$str = 'This is an example & tutorial .';   
print_r(str_word_count($str,1,'&.')); 
echo '<br>'; 

echo str_shuffle($string);   //shuffle string
echo '<br>'; 

$str = 'abcdefghijklmnopqrstuvwxyz0123456789';
$subs = substr($str,2 ,5);    //substr(strign,start,length_for_substring)
echo $subs;
echo '<br>';
$subs =  substr(str_shuffle($str),0,5);    //generate random string with length 5
echo $subs;
echo '<br>';

echo strrev($str).'<br>';   //reverse string

$string_one = 'This is my essay. I\'m going to be taking about php.';
$string_two = 'My essay is about cats.I\'ll be talking about cats and theirs colours';
similar_text($string_one,$string_two,$result);
echo 'The similarity between is '.$result.'<br>';

echo strlen($string_one);     //length of string
$s = '  hello ';
echo trim($s);       //trim whitespace from left and right

$s1 = 'This is a <img src="image.jpg"> string.';
$val = htmlentities(addslashes($s1));     //add shalsh
echo '<br>'.$val.'<br>';
echo stripslashes($val); */

//arrays
/* $food = array('Pasta','Pizza','Salad','Vegetable');
$food[4]= 'Fruit';
echo $food[0].'<br>';
print_r($food);
echo '<br>';

//associative array
$food = array('Pasta'=>300,'Pizza'=>100,'Salad'=>1000,'Vegetable'=>2000);
print_r($food);
echo '<br>'.$food['Pasta'].'<br>';

//multi dimensional array
$food = array('Healthy'=>
                        array('Salad','Vegetable','Pasta'),
            'Unhealthy'=>
                        array('Pizza','Ice cream', 'Popcorn'));
echo $food['Unhealthy'][0].'<br><br>';

//for each 
foreach($food as $element=>$inner_element){
    echo '<strong>'.$element.'</strong><br>';
    foreach($inner_element as $item){
        echo $item.'<br>';
    }
} */

//require and include
include "header.inc.php";       //if we set file which not exist then give error and contineous the page
require "header.inc.php";       //if we set file which not exist then give error and kill the page
echo 'Var is '.$var;

require_once 'header.inc.php';      //if ome time already required file the this command not fetch file second time
include_once 'header.inc.php';      //same as above properties

?>