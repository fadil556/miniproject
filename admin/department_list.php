<?php 
  if(@$_GET['do']=='success'){
    echo '<script type="text/javascript">
          swal("", "ทำรายการสำเร็จ !!", "success");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=department.php" />';

  }else if(@$_GET['do']=='finish'){
    echo '<script type="text/javascript">
          swal("", "อนุมัติสถานะเรียบร้อย !!", "success");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=department.php" />';
    
  }else if(@$_GET['do']=='error'){
    echo '<script type="text/javascript">s
          swal("", "ผิดพลาด !!", "error");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=department.php" />';
  }

$query = "
SELECT * FROM department as dep
INNER JOIN employee as emp ON dep.emp_id = emp.emp_id
" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);
echo '<table id="example1" class="table table-bordered table-striped">';
  echo "<thead>";
    echo "<tr class=''>
      <th width='5%'>ID</th>
      <th width='20%'>DEPARTMENT</th>
      <th width='20%'>MANAGER</th>
      <th width='15%' class='hidden-xs'>สถานะ</th>  
      <th width='10%'></th>
    </tr>";
  echo "</thead>";
  $i =0;
  if(mysqli_num_rows($result) > 0)        
        {
  while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . ++$i .  "</td> ";
    echo "<td class='hidden-xs'>".$row["dep_name"]."</td>";
    echo "<td> ".$row["emp_id"]."</td>";
    echo "</td>";
    echo "<td><a href='department.php?act=edit&ID=$row[dep_id]'  class='btn btn-success btn-xs'><span class='glyphicon glyphicon-edit'></span>EDIT</a>   
          <a href='member_del_db.php?ID=$row[dep_id]' onclick=\"return confirm('ยันยันการลบ')\" class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'>DELETE</span></a>
    </td> ";
}
  } 
echo "</table>";
mysqli_close($con);
?>
