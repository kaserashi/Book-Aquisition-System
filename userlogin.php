<!DOCTYPE html>
<html>
<head><title>userlogin</title>
        <link rel="stylesheet" type="text/css" href="userlogin.css">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
    <body>

    <div class="navigation-bar">
  
  
      <div id="navigation-container">
  
        <img src="logobook.jpg.jpeg">
  
        <ul>
          <li><a href="pagewithnav.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li id = "help"><a href="contactus.html">Contact Us</a></li>
          <li><a href = "help.html">Help</a></li>
          <li><a href="userlogin.php">Login</a></li>
          <li><a href="register.html">Signup</a></li>
          <li><a href="loginadmin.html">Admin</a></li>
       </ul>
    </div>
</div>
</div>
        <div style="border-radius: 5px;display: block;margin-left: auto;margin-top:100px;margin-right: auto;width: 30%;padding: 20px;";align="cenetr">
                 <form name="loginuser"action="" method="POST">
                 <input type="text"  name="reg" placeholder="Your registration number">
                 <input type="password" name="pwd" placeholder="Your password..">
                 <input type="submit" value="Submit" name="submit">
                </form>
        </div>
        

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwp";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit']))
{
$reg = (isset($_POST['reg']) ? $_POST['reg'] : '');
$pwd = (isset($_POST['pwd']) ? $_POST['pwd'] : '');
$sq = "SELECT * FROM registertable WHERE REG_NO='$reg' and PASS='$pwd'";
$upd = $conn->query($sq);
if ($upd->num_rows > 0) {
    echo'<center><span style="color: #e95959;text-align:center;"><h2>login successful welcome.$row["FNAME"].<h2></span></center>';
    header("Location:avl.php");
  }
else
   { 
    echo '<center><span style="color: white;text-align:center;"><h2>Sorry, your credentials are not valid, Please try again.<h2></span></center>';
   }
   }
?>
<br><br><br><br><br>
<div class="footer">
    <div class="navigation-bar">
      <div id="navigation-container">
  <ul>
  <li>
  <img src="logobook.jpg.jpeg">
  </li>
  <li>
    Address:
    VIT Vellore,
    Katpadi Road,
    Vellore,
    Tamil Nadu 632014
  </li>
  <li>
    Contact Us:
    Email:vitbarnbooks@gmail.com
    Mobile No: +918178197468
  </li>
  </ul>
    </div>
</div> 
</div>
  </body>
</html>
              
