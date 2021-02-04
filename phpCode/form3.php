<!DOCTYPE html>
<html>
    <head>
        <title>Form 3</title>
        <style>
            table{
                background-color: rgb(0, 38, 77);
                color:rgb(226, 172, 24);
                padding: 10px 10px 10px 10px;
            }
            td{
                padding-top: 10px;
                padding-left: 10px;
            }
            td~td{
                padding-right:70px;
            }
        </style>
        <script src="js3.js"></script>
    </head>
    <body>
    <center><h2>Form3 Practice</h2></center>
    
    <center>
        <div style="color: yellow; background-color:rgb(230, 138, 0); width:516px; height:40px"><strong style="float:left; padding:10px 0px 0px 10px">Sign Up</strong></div>  
        <form name="form3" action="form3.php" method="POST"  onsubmit="return checkelement();">
            <table>
                <tr border="1">
                    <td align="right">First Name</td>
                    <td><input type="text" name="firstname" id="firstname"></td>
                </tr>
                <tr>
                    <td align="right">Last Name</td>
                    <td><input type="text" name="lastname" id="lastname"></td>
                </tr>
                <tr>
                    <td align="right">Date Of Birth</td>
                    <td>
                        <select name="day">
                            <option disabled selected>Day</option>
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
                        <select name="month">
                            <option disabled selected>Month</option>
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
                        <select name="year">
                            <option disabled selected>Year</option>
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
                    <td align="right">Gender</td>
                    <td>
                        <input type="radio" name="gender" value="male" id="male">Male
                        <input type="radio" name="gender" value="female" id="female">Female<br>
                    </td>
                </tr>
                <tr>
                    <td align="right">Country</td>
                    <td>
                        <select name="country">
                            <option disabled selected>Country</option>
                            <option>India</option>
                            <option>Amreica</option>
                            <option>Dubai</option>
                            <option>UK</option>
                            <option>Japan</option>
                            <option>Russia</option>
                            <option>Europe</option>
                            <option>New zeland</option>
                            <option>Austrellia</option>
                            <option>Iraq</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="right">Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td align="right">Phone</td>
                    <td><input type="tel" name="phonenumber" ></td>
                </tr>
                <tr>
                    <td align="right">Password</td>
                    <td><input type="password" name="password1" id="password1"></td>
                </tr>
                <tr>
                    <td align="right">Conf  irm Password</td>
                    <td><input type="password" name="password2" id="password2"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" name="agree" id="agree"><label>I Agree to the Terms of use</label></td>
                </tr>
            </table>
            <div style="color: red; background-color:rgb(230, 138, 0); width:516px; height:60px; align:center">
            <input type="reset" value="Cancel" style="background-color: red; color:white; border:0; height:40px; width:100px; float:right; margin:10px 20px 10px 10px; padding:10px 10px 10px 10px">
            <input type="submit" value="Submit" name="submit" style="background-color: green; color:white; border:0; height:40px; width:100px; float:right; margin:10px 0px 10px 10px;  padding:10px 10px 10px 10px">
            </div>
    </form></center>
    </body>
</html>


<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"  && isset($_POST['submit'])) { 
        if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['day']) && isset($_POST['month']) && isset($_POST['year']) && isset($_POST['gender']) && isset($_POST['country']) && isset($_POST['email']) && isset($_POST['phonenumber']) && isset($_POST['password1']) && isset($_POST['password2']) && isset($_POST['agree'])){
            $name = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $day = $_POST['day'];
            $month = $_POST['month'];
            $year = $_POST['year'];
            $gender = $_POST['gender'];
            $country = $_POST['country'];
            $email = $_POST['email'];
            $phone = $_POST['phonenumber'];
            $pass = $_POST['password1'];
            $pass2= $_POST['password2'];
            $agrement = $_POST['agree'];
            if(!empty($name) && !empty($lname) && !empty($day) && !empty($month) && !empty($year) && !empty($gender) && !empty($country) && !empty($email) && !empty($phone) && (strlen($phone)==10) && !empty($pass) && !empty($pass2) && ($pass == $pass2)){
                echo '<br><h2>Your Input:</h2><br>';
                echo 'First Name: '.$name;
                echo '<br>Last Name: '.$pass;
                echo '<br>Birth Day: '.$day.' '.$month.' '.$year;
                echo '<br>Gender: '.$gender;
                echo '<br>Country: '.$country;
                echo '<br>Email: '.$email;
                echo '<br>Phone: '.$phone;
                echo '<br>Password: '.$pass;
            }else{
                echo "Fill All The Fields";
            }
        }
    }
?>