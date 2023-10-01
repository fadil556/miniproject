<?php
session_start();
echo '<meta charset="utf-8">';
include('../condb.php');
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit();

	
$e_id = mysqli_real_escape_string($con,$_POST["e_id"]);
$e_username = mysqli_real_escape_string($con,$_POST["e_username"]);
$e_password = mysqli_real_escape_string($con,$_POST["e_password"]);
$e_prefix = mysqli_real_escape_string($con,$_POST["e_prefix"]);
$e_name = mysqli_real_escape_string($con,$_POST["e_name"]);
$e_lname = mysqli_real_escape_string($con,$_POST["e_lname"]);
$e_date = mysqli_real_escape_string($con,$_POST["e_date"]);
$e_tel = mysqli_real_escape_string($con,$_POST["e_tel"]);
$e_email = mysqli_real_escape_string($con,$_POST["e_email"]);
$e_gender = mysqli_real_escape_string($con,$_POST["e_gender"]);
$e_address = mysqli_real_escape_string($con,$_POST["e_address"]);
$dep_id = mysqli_real_escape_string($con,$_POST["dep_id"]);
$sp_e_id = mysqli_real_escape_string($con,$_POST["sp_e_id"]);
$p_id = mysqli_real_escape_string($con,$_POST["p_id"]);


$sql = "UPDATE employee SET 
emp_username='$e_username',
emp_password='$e_password',
emp_prefix='$e_prefix',
emp_name='$e_name',
emp_lastname='$e_lname',
emp_date_of_birth='$e_date',
emp_tel='$e_tel',
emp_email='$e_email',
emp_gender='$e_gender',
emp_address='$e_address',
dep_id='$dep_id',
spemp_id='$sp_e_id',
p_id='$p_id'
WHERE emp_id=$e_id
 ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con);
	
	if($result){
	echo '<script>';
    echo "window.location='agency.php?do=finish';";
    echo '</script>';
	}else{
	echo '<script>';
    echo "window.location='agency.php?act=add&do=f';";
    echo '</script>';
}
?>