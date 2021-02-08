<?php

$conn_error = 'Could not connect.';
$mysql_host='localhost';
$mysql_user='ubuntu';
$mysql_pass='';
$mysql_db='a_database';
$link = @mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if(!$link){
    die($conn_error);
}

?>