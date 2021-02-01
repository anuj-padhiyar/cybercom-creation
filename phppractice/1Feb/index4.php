<?php

//GET method
/* if(isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year'])){
    $day = htmlentities($_GET['day']);
    $date = htmlentities($_GET['date']);
    $year = htmlentities($_GET['year']);
    if(!empty($day) && !empty($date) && !empty($year)){
        echo 'it\'s '.$day.' '.$date.' '.$year;
    }
    else {
        echo 'Fill in all fields.';
    }
}

//POST method
$match = 'pass123';
if(isset($_POST['password'])){
    $password = $_POST['password'];
    if(!empty($password)){
        if($password==$match){
            echo 'That is correct';
        }else{
            echo 'That is incorrect';
        }
    }else{
        echo 'Please enter password!!';
    }
} */

//Session in Php

?>

<!-- <hr>
<form action="index4.php"  method="GET">
    Day:<br><input type="text" name="day"><br>
    Date:<br><input type="text" name="date"><br>
    Year:<br><input type="text" name="year"><br><br>
    <input type="submit" value="Submit">
</form>
<hr>
<form action="index4.php" method="POST">
    Password:<br>
    <input type="password" name="password"><br><br> 
    <input type="submit" value="Submit">
</form>
<hr> -->

<?php

//session
/* session_start();
$_SESSION['username']='Alex';
$_SESSION['age']='21'; */

//Cookies
//setcookie('username','alex',time()+100);      //(name,value,time)

//File Handling

/* if(isset($_POST['name'])){
    $name = $_POST['name'];
    if(!empty($name)){
        $filename = "names.txt";
        $handle = fopen($filename,'a');
        if(filesize($filename)==0){
            fwrite($handle,$name);
        }else{
            fwrite($handle, ','.$name);
        }
        fclose($handle);

        echo "Current name in the file: ";
        $readin = file($filename);
        foreach($readin as $fname){
            echo $fname;
        }
    }else{
        echo 'Please type a name.';
    }
} */
?>

<!-- <form action="index4.php" method="POST">
    <br>Enter Name : <br><input type="text" name="name"><br><br>
    <input type="submit" value="Submit">
</form> -->

<?php 
//read using explode
/* $filename = "names.txt";
$handle = fopen($filename,'r');
$datain = fread($handle, filesize($filename));
$names_array = explode(',',$datain);
foreach($names_array as $name){
    echo $name.'<br>';
}
fclose($handle); */


//implode function
$names_array = array('Alex','Billy','Dale');
$string = implode('-',$names_array);
echo $string;

?>







