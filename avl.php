<html>
    <head>
            <link rel="stylesheet" type="text/css" href="searchpage.css">
            <!--link rel="stylesheet" type="text/css" href="login.css"-->
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


<p style="color:white;position: fixed;
top: 0;
right:300px;
width: 300px;
border: 3px solid #e95959;background-color: #e95959;border-radius: 10px;text-align: center;"id="logi" >you are logged in </p>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwp";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sq = "SELECT * FROM bookstable";
$upd = $conn->query($sq);
if ($upd->num_rows > 0) {
echo '<center><span style="color:white;text-align:center;"><h2>Books available in Store<h2></span></center>';
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
            <th>Topic</th>
        </tr>";
    while($row = $upd->fetch_assoc()) {
        echo "<tr>
              <td>". $row["BOOK_TITLE"]. "</td>
               <td>". $row["AUTHOR_NAME"]. "</td>
                <td>" . $row["QUANTITY"] . "</td>
                 <td>" . $row["TOPIC"] . "</td></tr>";
    }
echo "</table></center>";


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
<script>
  const log = document.getElementById("logi");
  setTimeout(() => {
    log.style.display = 'none';
  }, 2000);

</script>
  </body>
</html>