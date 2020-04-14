<?php
//connectivity
$con=mysqli_connect("localhost","root","");
//select database
mysqli_select_db($con,'iwp');

extract($_POST);
if(isset($submit))
{

//To check user already exists or not
$sql=mysqli_query($con,"select USERNAME, PASSWORD from admintable where USERNAME='$user'");
$return=mysqli_fetch_array($sql);

if($return["USERNAME"]==$user && $row["PASSWORD"]==$pass)
{
    header("Location:admin.html");
}
else
{
echo "<font color='red'>".ucfirst($reg)." Admin does not exist....!!</font>";
}
}
?>