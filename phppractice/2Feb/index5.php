<?php 

//File listing
$directory = 'file';
if($handle = opendir($directory.'/')){
    echo 'Looking Inside \''.$directory.'\':<br>';

    while($file = readdir($handle)){
        if($file != '.' && $file != '..'){
            echo '<a href="'.$directory.'/'.$file.'">'.$file.'</a><br>';
        }
    }
}
echo '<br>';

//check file exists or not
if(file_exists()){
    echo 'File already exists.';
}else{
    echo 'File is not available';
}
echo '<br>';

//for image files
$filename_or = 'image.jpg';
$filename = rand(1000,9999).md5($filename_or).rand(1000,9999);
echo $filename.'<br>';

//deleting the file
if(@unlink('filedelete.txt')){
    echo 'File Deleted.';
}else{
    echo 'File cannot be deleted.';
}

//rename the file
$filename = 'filetorename.txt';
$rand = rand(10000,99999);
if(rename($filename,$rand.'.txt')){
    echo '<br>File '.$filename.' has been renamed to '.$rand.'.txt';
}else{
    echo '<br>Error Renaming.';
}
echo '<br>';

//file upload
$name = $_FILES['file']['name'];
$extension = strtolower(substr($name, strpos($name,'.')+1));
$type = $_FILES['file']['type'];
$size = $_FILES['file']['size'];

$tmp_name = $_FILES['file']['tmp_name'];
if(isset($name)){
    if(!empty($name)){
        if($extension == 'txt' && $type == 'text/plain' && $size<1000){
            $location = 'upload/';
            if(move_uploaded_file($tmp_name,$location.$name)){
                echo 'Uploaded'; 
            }else{
                echo 'There was an error';
            }
        }else{
            echo 'File Must be txt or size must be less than 1000kb';
        }
    }else{
        echo 'Please choose a file.';
    }
}

//hit_counter
function hit_count(){
    $filename = 'count.txt';
    $handle = fopen($filename,'r');
    $current = fread($handle,filesize($filename));
    fclose($handle);
    
    $current += 1;
    $handle = fopen($filename,'w');
    fwrite($handle, $current);
    fclose($handle);
}
hit_count();

//MD5 Encryption
if(isset($_POST['user_password']) && !empty($_POST['user_password'])){
    $user_password = md5($_POST['user_password']);
    $file_password = md5('password');
    if($user_password == $file_password){
        echo 'Password Okay';
    }else{
        echo 'Password Incorrect';
    }
}else{
    echo 'Enter Password';
}


?>

<!-- <hr>
<form action="index5.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file"><br><br><br>
    <input type="submit" value="Submit">
</form> -->

<hr>
<form action="index5.php" method="POST">
    Password : <input type="password" name="user_password"><br><br>
    <input type="submit" value="Submit">
</form>