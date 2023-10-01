<?php
session_start();
require_once("condb.php");
$_username=$_POST['re_username'];
$_password=$_POST['re_password'];



$sql="INSERT INTO members (mem_id,username,password) VALUE ('','$_username','$_password')";
$rsUser=mysqli_query($con,$sql);
echo "<meta http-equiv='refresh' content='0;URL=index.php'>";