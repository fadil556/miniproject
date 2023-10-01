<?php
session_start();
echo '<meta charset="utf-8">';
include('../condb.php');
/*echo $_POST["d_id"];
echo $_POST["d_name"];
echo $_POST["d_e_id"];*/
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit();

	
	$d_id = mysqli_real_escape_string($con,$_POST["d_id"]);
	$d_name = mysqli_real_escape_string($con,$_POST["d_name"]);
	$d_e_id = mysqli_real_escape_string($con,$_POST["d_e_id"]);




	$sql = "UPDATE department SET 
	dep_name='$d_name',
	emp_id='$d_e_id'
	WHERE dep_id=$d_id
	 ";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	mysqli_close($con);
	
	if($result){
	echo '<script>';
    echo "window.location='department.php?do=finish';";
    echo '</script>';
	}else{
	echo '<script>';
    echo "window.location='department.php?act=add&do=f';";
    echo '</script>';
}
?>