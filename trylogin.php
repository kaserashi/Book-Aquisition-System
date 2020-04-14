<?php
echo "hello ";

echo $reg =$_POST['reg'];
echo $pwd=$_POST['pwd'];
$connection = mysqli_connect("localhost", "root", "","iwp");




$query="select *from registertable where REG_NO='$reg' and PASS='$pwd'";
$result=mysqli_query($connection,$query);
$row=mysqli_fetch_array($result);
                if($row["REG_NO"]==$reg && $row["PASS"]==$pwd){
    echo"login successful welcome".$row['FNAME'];
    header("Location:avl.php");}
else
   { echo"Sorry, your credentials are not valid, Please try again.";
    header("Location:userlogin.php");}
   
  ?>