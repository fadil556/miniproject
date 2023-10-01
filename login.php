<?php
session_start();
require_once("condb.php");
$_username=$_POST['username'];
$_password=$_POST['password'];
echo $_username."<br>";
echo $_password;

$sql="SELECT * FROM members WHERE username='$_username' AND password='$_password'";
$rsMser=mysqli_query($con,$sql);
$rowMser=mysqli_fetch_array($rsMser);

Header("location: index_mem.php");
?>