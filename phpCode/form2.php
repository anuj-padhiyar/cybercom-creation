<!DOCTYPE html>
<html>
<head>
	<title>Form2</title>
    <script src="js2.js"></script>
</head>
<body>
    <center>
        <h2>Form2 Practice.</h2>
    </center>
    <form action="form2.php" method="POST" name="form2" onsubmit="return checkelement();">
        <fieldset style="background-color: mistyrose">
      	    <legend style="margin-left: calc(50% - 80px)">
                <h3>USER FORM</h3>
            </legend>
      	    <center><br>
      	    <table style="background-color: lime">
      	 	<tr>
      	       <td>
      	        	<ul>
      	 	        <li>FIRST NAME</li>
                    </ul>
                </td>
      	 	    <td>
      	 	    	<input type="text" name="name"id="name"><br>
      	 	    </td>
      	    </tr>
      	    <tr>
      	    	<td>
      	    	  <ul>
      	 	       <li>PASSWORD</li>
      	 	      </ul>
      	 	    </td>
      	 	    <td>
      	            <input type="password" name="password" id="password"><br>
      	 	    </td>
      	 	</tr> 
      	 	<tr>
      	 		<td>
      	 			<ul>	
      	 	          <li>GENDER</li>
      	 	        </ul>
      	 	    </td>
      	 	    <td>
      	 	        <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female<br>
      	 	   </td>
      	 	</tr>
      	 	<tr>
      	 		<td>
      	 			<ul>
      	 				<li>ADDRESS</li>
      	 			</ul>
      	 		</td>
      	 		<td>
      	 			<textarea name="address" rows="4" cols="25"></textarea><br>
      	 		</td>
            <tr>
            	<td>
            		<ul>
            		  <li>D.O.B</li>
            		</ul>
                </td>
                <td>
      	 		<select name="month">
      	 			<option>Jan</option>
      	 			<option>Feb</option>
      	 			<option>Mar</option>
      	 			<option>Apr</option>
      	 			<option>May</option>
      	 			<option>Jun</option>
      	 			<option>July</option>
      	 			<option>Aug</option>
      	 			<option>Sep</option>
      	 			<option>Oct</option>
      	 			<option>Nov</option>
      	 			<option>Dec</option>
      	 		</select>
      	 		<select name="day">
      	 			<option>1</option>
      	 			<option>2</option>
      	 			<option>3</option>
      	 			<option>4</option>
      	 			<option>5</option>
      	 			<option>6</option>
      	 			<option>7</option>
      	 			<option>8</option>
      	 			<option>9</option>
      	 			<option>10</option>
      	 			<option>11</option>
      	 			<option>12</option>
      	 			<option>13</option>
      	 			<option>14</option>
      	 			<option>15</option>
      	 			<option>16</option>
      	 			<option>17</option>
      	 			<option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                    <option>31</option>
      	 		</select>
      	 		<select name="year">
      	 			<option>1990</option>
      	 			<option>1991</option>
      	 			<option>1992</option>
      	 			<option>1993</option>
      	 			<option>1994</option>
      	 			<option>1995</option>
      	 			<option>1996</option>
                    <option>1997</option>
      	 			<option>1998</option>
      	 			<option>1999</option>
      	 			<option>2000</option>
      	 			<option>2001</option>
      	 			<option>2002</option>
      	 			<option>2003</option>
      	 			<option>2004</option>
      	 			<option>2005</option>
      	 			<option>2006</option>
      	 			<option>2007</option>
                    <option>2008</option>
      	 			<option>2009</option>
      	 			<option>2010</option>
       	 		</select>
      	 	   </td>
      	    </tr>
      	    <tr>
      	    	<td>
      	    	 <ul>
      	 	      <li>SELECT GAMES</li>
      	 	     </ul>
      	 	    </td>
      	 	    <td>  
      	 		  <input type="checkbox" name="games[]" id="hockey" value="hockey">
      	 		  <label>Hockey</label>
      	 		  <input type="checkbox" name="games[]" id="football" value="football">
      	 		  <label>Football</label>
      	 		  <input type="checkbox" name="games[]" id="cricket" value="cricket">
      	 		  <label>Cricket</label>
      	 		  <input type="checkbox" name="games[]" id="vollyball" value="vollyball">
      	 		  <label>Vollyball</label><br>
      	 	  </td>
      	  </tr>
      	  <tr>
              <td>
              	<ul>
      	 	       <li>MARTIAL STATUS</li>
      	 	    </ul> 
      	 	   </td>
      	 	   <td>  
      	 		<input type="radio" name="status" value="Married">Married
                <input type="radio" name="status" value="unmarried">Unmarried
      	 	   </td>
      	   </tr>
      	   <tr>
               <td>
               </td>
           	   <td>    	   
      	 	   <input type="submit" name="submit" value="Submit">
      	 	   <input type="reset" name="reset"  value="Reset"><br>
      	       </td>
      	   </tr>
      	   <tr>
               <td>
               </td>
               <td>
      	 	    <input type="checkbox" name="agrement" id="agrement"><label>I accept this agrement</label>
      	 	    </td>
      	    </tr>
      	    </table>
      	    </center><br>
      	</fieldset> 
    </form>
</body>
</html>


<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) { 
        if(isset($_POST['name']) && isset($_POST['password']) && isset($_POST['gender']) && isset($_POST['games']) && isset($_POST['status']) && isset($_POST['agrement'])){
            $name = $_POST['name'];
            $pass = $_POST['password'];
            $gender = $_POST['gender'];
            $games = $_POST['games'];
            $status = $_POST['status'];
            $agrement = $_POST['agrement'];
            $bday = $_POST['day'];
            $bmonth = $_POST['month'];
            $byear = $_POST['year'];
        
            if(!empty($name) && !empty($pass) && !empty($games) && !empty($gender) && !empty($status) && !empty($agrement)){
                echo '<br><h2>Your Input:</h2><br>';
                echo 'Name: '.$name;
                echo '<br>Password: '.$pass;
                echo '<br>Gender: '.$gender;
                echo '<br>Games: '.json_encode($games);
                echo '<br>Birthdate: '.$bday.' '.$bmonth.' '.$byear;
                echo '<br>Status: '.$status;
            }else{
                echo "Fill All The Fields";
            }
        }
    }
?>