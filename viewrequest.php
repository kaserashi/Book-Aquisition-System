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
          <li><a href="editrequest1.php">Edit Requests</a></li>
          <li><a href="editbook.html">Edit Books</a></li>
          <li><a href="viewrequest.php"> View Requests </a></li>
          <li id = "help"><a href="feedbackview.html">view Feedbacks</a></li>
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

$sql = "SELECT * FROM requesttable";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
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
padding:3px;
text-align:center;
font-family:times;}
tr:nth-child(odd) {background-color: #212122;}";
echo"<center><h1>Books Requested</h1></center>";
   echo "<center><table>
   	    <tr>
   	    	<th>BOOK TITLE</th>
   	    	<th>Author name</th>
            <th>Bqwer</th>
   	    </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
              <td>". $row["BOOK_TITLE"]. "</td>
               <td>". $row["AUTHOR_NAME"]. "</td>
                <td>" . $row["QUANTITY"] . "</td></tr>";
    }
echo "</table></center>";
} else {
    echo "0 results";
}?>
 

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

 <?$conn->close();?>
</body>
</html>

