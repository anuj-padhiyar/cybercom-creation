<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Form 1</title>
    <style>
        td{
            width: 300px;
            padding-left: 20px;
            padding-top: 2px;
            padding-bottom: 2px;
        }
        select, option {
            width: 260px;
        }
    </style>
    <script src="js1.js"></script>
</head>
<body>
      <center>Form1 Practice.</center>
      <center>
        <form method="POST" action="form1.php" name="form" enctype="multipart/form-data" onsubmit="return(checkelement());" >
      	  <table border="1px" style="background-color: black ">
      	  	<tr style="background-color: rgb(248, 242, 149)">
      	  	    <th style="width:70" colspan="2"><h2 style="color: red;">USER FORM</h2></th>
      	  	</tr>
      	  	<tr>
      	  		<td style="background-color: rgb(46, 164, 211)">Enter Name</td>
      	  		<td style="background-color: rgb(46, 164, 211)"><input type="text" name="entername" maxlength="13"  style="background-color:skyblue; width:260px"></td>
      	  	</tr>
      	  	<tr>
      	  		<td style="background-color: rgb(46, 164, 211)">Enter Password</td>
      	  		<td style="background-color: rgb(46, 164, 211)"><input type="password" name="enterpassword" maxlength="16" style="background-color:skyblue; width:260px"></td>
      	  	</tr>	
      	  	<tr>
      	  		<td style="background-color: rgb(46, 164, 211)">Enter Address</td>
      	  		<td style="background-color: rgb(46, 164, 211)">
      	  		<textarea name="enteraddress"rows="3" cols="30" maxlength="1000" style="background-color:skyblue; width:260px" ></textarea>
      	  	</tr>
                  <tr>
                        <td style="background-color: rgb(46, 164, 211)">Select Game</td>
                        <td style="background-color: rgb(46, 164, 211)">
                        	<input type="checkbox" name="game[]" value="Hockey"><label for="hockey">Hockey</label><br>
                            <input type="checkbox" name="game[]" value="Football"><label for="football">Football</label><br>
                            <input type="checkbox" name="game[]" value="Badminton"><label for="badminton">Badminton</label><br>
                            <input type="checkbox" name="game[]" value="Cricket"><label for="cricket">Cricket</label><br>
                            <input type="checkbox" name="game[]" value="Volleyball"><label for="volleyball">Vollyball</label><br></td>
                  </tr>    
                  <tr>
                        <td style="background-color: rgb(46, 164, 211)">Gender</td>
                        <td style="background-color: rgb(46, 164, 211)">
                        	<input type="radio" name="gender" value="Male" id="Male"><label for="male" >Male</label>
                            <input type="radio" name="gender" value="Female" id="Female"><label for="Female" >Female</label>
                        </td>
                  </tr>  
                  <tr>
                        <td style="background-color: rgb(46, 164, 211)">Select ur age</td>
                        <td style="background-color: rgb(46, 164, 211)"><select name="select" >
                        	  <option disabled selected>select</option>
                              <option value="0-10 Age">0-10 Age</option>
                              <option value="10-20 Age">10-20 Age</option>
                              <option value="20-30 Age">20-30 Age</option>
                              <option value="30 Above Age">30 Above Age</option>
                            </select>
                        </td>
                  </tr>
                  <tr>
                        <td colspan="2" style="background-color: rgb(46, 164, 211)" >
                             <center><input type="file" value="file" name="file" style="background-color:skyblue" ></center>
                        </td>
                  </tr>
                  <tr>
                        <td colspan="2" style="background-color: rgb(46, 164, 211)" width="300">
                              <center><input type="reset" value="Reset"  style="background-color:skyblue; padding: 5px 70px 6px 70px;border-radius: 2px;">
                              <input type="submit" value="Submit Form" name="submit" style="background-color:skyblue; padding: 5px 50px 6px 50px;border-radius: 2px;"></center>
                        </td>
                  </tr>      
      	  </table>
      	</form>
      </center>
</body>
</html>


<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {  
        $filename = $_FILES['file']['name'];
        if(isset($_POST['entername']) && isset($_POST['enterpassword']) && isset($_POST['enteraddress']) && isset($_POST['game']) && isset($_POST['gender']) && isset($_POST['select']) && isset($filename)){
            $name = $_POST['entername'];
            $pass = $_POST['enterpassword'];
            $addr = $_POST['enteraddress'];
            $games = $_POST['game'];
            $gender = $_POST['gender'];
            $age = $_POST['select'];
        
            if(!empty($name) && !empty($pass) && !empty($addr) && !empty($games) && !empty($gender) && !empty($age) && !empty($filename)){
                echo '<br><h2>Your Input:</h2><br>';
                echo 'Name: '.$name;
                echo '<br>Password: '.$pass;
                echo '<br>Address: '.$addr;
                echo '<br>Games: '.json_encode($games);
                echo '<br>Gender: '.$gender;
                echo '<br>Age: '.$age;
                echo '<br>File name: '.$filename;
            }else{
                echo "Fill All The Fields";
            }
        }
    }
?>
