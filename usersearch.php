<html>
    <head>
            <link rel="stylesheet" type="text/css" href="usersearch.css">
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
<!-- <p style="color:white;position: fixed;
top: 0;
right:300px;
width: 300px;
border: 3px solid #e95959;background-color: #e95959;border-radius: 10px;text-align: center;"id="logi" >you are logged in </p> -->
<div class="filter">
  <form action="" method="POST">
  <h1>Search Books</h1>
    <input type="text" id="title" name="title" placeholder="Enter title/author/genre">
    <input type="submit" value="Search" name="Search">

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
if(isset($_POST['Search']))
{
$id = (isset($_POST['title']) ? $_POST['title'] : '');
$sq = "SELECT * FROM bookstable WHERE BOOK_TITLE like'%$id%'";
$sq1 = "SELECT * FROM bookstable WHERE AUTHOR_NAME like'%$id%'";
$sq2= "SELECT * FROM bookstable WHERE TOPIC like'%$id%'";
$upd = $conn->query($sq);
$upd1 = $conn->query($sq1);
$upd2= $conn->query($sq2);

if ($upd->num_rows > 0) {
echo '<center><span style="color:white;text-align:center;"><h2>This book is available at Balaji<h2></span></center>';
echo"<style>
      th{
        font-size: 30px;
        color:white;
        background-color:#E95959;
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
padding:3px;
border: 1px double white;
text-align:center;
font-family:times;}
tr:nth-child(odd) {background-color: #212122;}
</style>";
//echo'<center><h1><span style="color:white;text-align:center;">Books Available</span></h1></center>';
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
}
elseif ($upd1->num_rows > 0) {
echo '<center><span style="color:white;text-align:center;"><h2>This book is available at Balaji</h2></span></center>';
echo"<style>
      th{
        font-size: 30px;
        color:white;
        background-color:#E95959;
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
tr:nth-child(odd) {background-color: #212122;}
</style>";
//echo'<center><h1><span style="color:white;text-align:center;">Books Available</span></h1></center>';
   echo "<center><table>
        <tr>
          <th>BOOK TITLE</th>
          <th>Author name</th>
            <th>Quantity</th>
            <th>Topic</th>
        </tr>";
    while($row = $upd1->fetch_assoc()) {
        echo "<tr>
              <td>". $row["BOOK_TITLE"]. "</td>
               <td>". $row["AUTHOR_NAME"]. "</td>
                <td>" . $row["QUANTITY"] . "</td>
                 <td>" . $row["TOPIC"] . "</td></tr>";
    }
echo "</table></center>";
}

elseif($upd2->num_rows > 0) {
echo '<center><span style="color:white;text-align:center;"><h2>This book is available at Balaji</h2></span></center>';
echo"<style>
      th{
        font-size: 30px;
        color:white;
        background-color:#E95959;
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

//echo'<center><h1><span style="color:white;text-align:center;">Books Available</span></h1></center>';
   echo "<center><table>
        <tr>
          <th>BOOK TITLE</th>
          <th>Author name</th>
            <th>Quantity</th>
            <th>Topic</th>
        </tr>";
    while($row = $upd2->fetch_assoc()) {
        echo "<tr>
              <td >". $row["BOOK_TITLE"]. "</td>
               <td>". $row["AUTHOR_NAME"]. "</td>
                <td>" . $row["QUANTITY"] . "</td>
                 <td>" . $row["TOPIC"] . "</td></tr>";
    }
echo "</table></center>";
}
else
{
echo '<center><span style="color:white;text-align:center;"><h2>This book is not available at Balaji</h2></span></center>';
echo '<center><a style="color:white ;text-decoration:none;" href="request.php"><p>Cannot find a book?....Request here</a></center>';

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

<!-- <script>
  const log = document.getElementById("logi");

  setTimeout(() => {
    log.style.display = 'none';
  }, 2000);

</script>
 -->  </body>
  



  
  </html>