<?php
session_start();
require_once("condb.php");
$_username = isset($_POST['username']) ? $_POST['username'] : '';
$_password = isset($_POST['password']) ? $_POST['password'] : '';

// ตรวจสอบว่ามีข้อมูลที่ส่งมาหรือไม่
if (!empty($_username) && !empty($_password)) {
    // ทำสิ่งที่คุณต้องการทำต่อไป
} else {
    echo "กรุณากรอกชื่อผู้ใช้และรหัสผ่าน";
}

$sql="SELECT * FROM employee as emp INNER JOIN position as p ON emp.p_id = p.p_id WHERE emp_username='$_username' AND emp_password='$_password'";
$rsEmp=mysqli_query($con,$sql);
$rowEmp=mysqli_fetch_array($rsEmp);

//echo $rowEmp['p_name'];
	
if($rowEmp['p_name']=="administrator"){
	$_SESSION['emp_id']=$rowEmp['emp_id'];
	$_SESSION['emp_name']=$rowEmp['emp_name'];
	$_SESSION['p_name']=$rowEmp['p_name'];
	Header("location: ../admin/index_admin.php");
}/*else if($rowUser['status']=="manager"){
	Header("location: index_employee.php");
}else if($rowUser['status']=="supermanager"){
	Header("location: index_member.php");
}*/else{
Header("location: ../index.php?err=1");
}
exit();
?>