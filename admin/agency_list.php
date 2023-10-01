<?php 
  if(@$_GET['do']=='success'){
    echo '<script type="text/javascript">
          swal("", "ทำรายการสำเร็จ !!", "success");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=agency.php" />';

  }else if(@$_GET['do']=='finish'){
    echo '<script type="text/javascript">
          swal("", "อนุมัติสถานะเรียบร้อย !!", "success");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=agency.php" />';
    
  }else if(@$_GET['do']=='error'){
    echo '<script type="text/javascript">
          swal("", "ผิดพลาด !!", "error");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=agency.php" />';
  }

$query = "
SELECT emp.emp_id,emp.emp_name,emp.emp_lastname,emp.emp_tel,emp.emp_address,emp.emp_email,emp.emp_date_of_birth,dep.dep_name,p.p_name,emp.spemp_id
FROM employee as emp, position as p,department as dep
WHERE (emp.p_id = p.p_id && emp.dep_id = dep.dep_id)
ORDER BY emp.emp_id DESC" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);
echo '<table id="example1" class="table table-bordered table-striped">';
  echo "<thead>";
    echo "<tr class=''>
      <th width='5%'>ID</th>
      <th width='20%'>ข้อมูลส่วนตัว</th>
      <th width='30%'>ที่อยู่อาศัย</th>
      <th width='10%' class='hidden-xs'>department</th>
      <th width='10%' class='hidden-xs'>position</th>
      <th width='10%' class='hidden-xs'>manager</th>
      <th width='15%' class='hidden-xs'>EDIT/DELELTE</th>  
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result)) {
    //$status = $row["a_status"];
    echo "<tr>";
    echo "<td>" .$row["emp_id"] .  "</td> ";
    echo "<td> ชื่อ ".$row["emp_name"]."  ".$row["emp_lastname"]
    ."<br> เบอร์โทร ".$row["emp_tel"]
    ."</td> ";
    echo "<td>" .$row["emp_address"] ."<br>Gmail :".$row["emp_email"]."<br>เกิดวันที่ :".$row["emp_date_of_birth"].  "</td> ";
    echo "<td class='hidden-xs'>".$row["dep_name"]."</td> ";
    echo "<td class='hidden-xs'>".$row["p_name"]."</td> ";
    echo "<td class='hidden-xs'>".$row["spemp_id"]."</td> ";
 /*echo "<td>";
 if ($status ==1) {
   echo "<font color='red'>รอการอนุมัติ</font>";
 }else{
  echo "<font color='green'>อนุมัติแล้ว</font>";
 }*/

 echo "</td>";
    echo "<td><a href='index_admin.php?act=edit&ID=$row[emp_id]'  class='btn btn-success btn-xs'><span class='glyphicon glyphicon-edit'></span>EDIT</a>   
          <a href='agency_del_db.php?ID=$row[emp_id]' onclick=\"return confirm('ยันยันการลบ')\" class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span>DELETE</a>
    </td> ";
   
  } 
echo "</table>";
//mysqli_close($con);
?>
