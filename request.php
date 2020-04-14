<html>
    <head>
                       <!-- <link rel="stylesheet" type="text/css" href="login.css">
                       <link rel="stylesheet" type="text/css" href="searchpage.css"> -->
                       <link rel="stylesheet" type="text/css" href="searchpage.css">

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
</div><?php
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
<input type='text' name='author' placeholder='Author name....' required><br>
<input type='number' name='quan'placeholder='quantity of the book...'required><br>
<input type='submit' value='Add Request' name='up' onsubmit=''></form></div>";

if(isset($_POST['up']))
{
$id = (isset($_POST['book']) ? $_POST['book'] : '');
$id1 = (isset($_POST['author']) ? $_POST['author'] : '');
$id2 = (isset($_POST['quan']) ? $_POST['quan'] : '');


$sql="SELECT * FROM requesttable WHERE BOOK_TITLE='$id'";
$u = $conn->query($sql);

$r="SELECT QUANTITY FROM requesttable WHERE BOOK_TITLE='$id'";
$p = $conn->query($r);
$row = $p->fetch_assoc();
$q=(int)$id2+(int)$row;
 

if(mysqli_num_rows($u)>=1)
   {
    $sq = "UPDATE requesttable SET QUANTITY='$id2' WHERE BOOK_TITLE='$id'";
    $upd = $conn->query($sq);
    echo '<center><span style="color:white;text-align:center;"><h2>Your request is accepted.<h2></span></center>';
}



  else
    {
   $sq="INSERT INTO requesttable (BOOK_TITLE,AUTHOR_NAME, QUANTITY)
VALUES ('$id','$id1','$id2')";
$upd = $conn->query($sq);
echo '<center><span style="color:white;text-align:center;"><h2>Your request is accepted.<h2></span></center>';
}
}


/*$sql = "SELECT * FROM requesttable";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
     echo"<style>
      td{
        font-size: 30px;
      }
      h1{
        margin-top: 40px;
      }
table{
margin-top: 50px;
width:1500px;
border-collapse:collapse;
border: 2px double black;
text-align:center;
font-family:times;}
tr:nth-child(odd) {background-color: #ABC81F;}
</style>";
echo"<center><h1>Books Requested</h1></center>";
   echo "<center><table>
        <tr>
          <td>BOOK TITLE</td>
          <td>Author name</td>
            <td>Quantity</td>
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
}
echo '<button><a href="user.html">Go back</button>';*/
        $conn->close();
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
