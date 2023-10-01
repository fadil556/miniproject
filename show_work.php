<?php
//$q = $_GET['q'];
include("condb.php");
$sql = "SELECT * FROM work as w
INNER JOIN agency as a ON w.a_id = a.a_id
ORDER BY w.w_id DESC";  //เรียกข้อมูลมาแสดงทั้งหมด
$result = mysqli_query($con, $sql);
while($row_prd = mysqli_fetch_array($result)){
?>

<div class="col-sm-3" align="center">
    <div class="card border-Light mb-1" style="width: 16.5rem;">
        <br>
        <img class="card-img-top">
        <a href=""> <?php echo"<img src='w_img/".$row_prd['w_img']."'width='100%' height='100%'>";?></a>
        <div class="card-body">
          
            ตำแหน่ง  <?php echo $row_prd["w_position"];?>
            <br>
            เงินเดือน <?php echo number_format($row_prd["w_salary"]);?> บาท
           <p>
            ผู้ลงประกาศ: <font color="green"><?php echo $row_prd["a_name"];?></font>
        </div>
       
            <button type="button" class="btn btn-primary btn-sm">
            <a style="color: #000000" href="#"> สมัครงาน </a></button>  
  
        <br>
    </div>
</div>
<?php } ?>
 