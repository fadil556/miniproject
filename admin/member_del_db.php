<?php
echo '<meta charset="utf-8">';
include('../condb.php');
	$ID  = mysqli_real_escape_string($con,$_GET["ID"]);
	$sql = "DELETE FROM member WHERE m_id=$ID";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());	
	mysqli_close($con);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "window.location = 'member.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'member.php'; ";
	echo "</script>";
}
?>