
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

$sql = "SELECT * FROM bookstable";
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
width:1000px;
border-collapse:collapse;
border: 2px double black;
text-align:center;
font-family:times;}
tr:nth-child(odd) {background-color: #ABC81F;}
</style>";
echo"<center><h1>Books Available</h1></center>";
   echo "<center><table>
        <tr>
          <td>BOOK TITLE</td>
          <td>Author name</td>
            <td>Quantity</td>
            <td>Topic</td>
        </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
              <td>". $row["BOOK_TITLE"]. "</td>
               <td>". $row["AUTHOR_NAME"]. "</td>
                <td>" . $row["QUANTITY"] . "</td>
                 <td>" . $row["TOPIC"] . "</td></tr>";
    }
echo "</table></center>";
} else {
    echo "0 results";
}
echo '<button><a href="user.html">Go back</button>';
        $conn->close();
?>

