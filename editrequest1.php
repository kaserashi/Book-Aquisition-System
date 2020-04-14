<html>
    <head>
            <link rel="stylesheet" type="text/css" href="searchpage.css">
    </head>
<body>

    <div class="navigation-bar">
      <div id="navigation-container">
        <img src="logobook.jpg.jpeg">
        <ul>
          <li><a href="viewrequest.php"> View Requests </a></li>
          <li><a href="editrequest1.php">Edit Requests</a></li>
          <li><a href="editbook.html">Edit Books</a></li>
          <li id = "help"><a href="viewfeedback.php">View Feedbacks</a></li>
          <li><a href="pagewithnav.html">Logout</a></li>
        </ul>
    </div>
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
echo "<div style='border-radius: 5px;display: block;margin-left: auto;margin-top:100px;margin-right: auto;width: 100%;padding: 20px;';align='cenetr'><form method='POST'>
<input type='text' name='book' placeholder='Book name.....' required><br>
<input type='submit' value='Delete from Request table' name='up' onsubmit=''></form></div>";
$id = (isset($_POST['book']) ? $_POST['book'] : '');
$sq = "DELETE FROM requesttable WHERE BOOK_TITLE='$id'";
$delete = $conn->query($sq);


$sq = "SELECT * FROM requesttable";
$upd = $conn->query($sq);
if ($upd->num_rows > 0) {
echo '<center><span style="color:white;text-align:center;"><h2> Requested Books<h2></span></center>';
echo"<style>
      th{
        font-size: 30px;
        color:white;
        background-color:E95959;
      }
      h1{
        margin-top: 40px;
      }
      td{
        color:white;
        font-size: 20px;
        padding:8px;

      }
table{
border-radius:25px;
margin-top: 50px;
width:1000px;
border-collapse:collapse;
border: 1px double white;
text-align:center;
padding:3px;
font-family:times;}
tr:nth-child(odd) {background-color: #212122;}
</style>";
   echo "<center><table>
          <th>BOOK TITLE</th>
          <th>Author name</th>
            <th>Quantity</th>
        </tr>";
    while($row = $upd->fetch_assoc()) {
        echo "<tr>
              <td>". $row["BOOK_TITLE"]. "</td>
               <td>". $row["AUTHOR_NAME"]. "</td>
                <td>" . $row["QUANTITY"] . "</td></tr>";
    }
echo "</table></center>";

if(isset($_POST['up'])){
echo '<center><span style="color:white;text-align:center;"><h2>Request Edited.<h2></span></center>';
}
 $conn->close();
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