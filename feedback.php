<html>
    <head>
<!--                        <link rel="stylesheet" type="text/css" href="login.css">
 -->                       <link rel="stylesheet" type="text/css" href="searchpage.css">

    </head>
<body>

    <div class="navigation-bar">
      <div id="navigation-container">
        <img src="logobook.jpg.jpeg">
        <ul>
          <li><a href="avl.php">Home</a></li>
          <li><a href="usersearch.php">Search Books</a></li>
          <li><a href="request.php">Request Books</a></li>
          <li id = "help"><a href="feedback.php">Feedback</a></li>
          <li><a href="pagewithnav.html">Logout</a></li>
        </ul>
    </div>
</div>


<div style="border-radius: 5px;display: block;margin-left: auto;margin-top:100px;margin-right: auto;width: 30%;padding: 20px;";align="center">
  <form style='margin-left: -70px' method='POST'>
  <h2 style='color:white;text-align:center;margin-left: 220px'>Feedback:<h2>

<textarea style="border-radius:5px;" id='feedback' name='feedback' placeholder='Enter Feedback' rows='8' cols='79'>
  
</textarea>
<br><br>
<input style="margin-left: 180px" type='submit'  value='Submit' name='submit'>
</form>
</div>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit']))
{

$id1 = (isset($_POST['feedback']) ? $_POST['feedback'] : '');
$g=0;
if($id1=="")
{
  $g=1;
}
else
{
  $g=0; 
}
if($g==0)
{
$sq="INSERT INTO feedback (FEEDBACK)
VALUES ('$id1')";
$upd = $conn->query($sq);
echo '<center><span style="color:white;text-align:center;"><h2>Feedback Submitted.<h2></span></center>';
}
elseif($g==1)
{
  echo '<center><span style="color:white;text-align:center;"><h2>Please enter Feedback.<h2></span></center>';
}
}
?>


<div class="footer">
    <div class="navigation-bar">
      <div id="footer-container">
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
