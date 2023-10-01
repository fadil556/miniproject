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

$sql="SELECT * FROM members WHERE username='$_username' AND password='$_password'";
$rsMser=mysqli_query($con,$sql);
$rowMser=mysqli_fetch_array($rsMser);

Header("location: ../index_mem.php");
?>