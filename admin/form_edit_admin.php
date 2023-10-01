<?php 
if(@$_GET['do']=='finish'){
    echo '<script type="text/javascript">
          swal("", "แก้ไขสำเร็จ !!", "success");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=agency_profile.php" />';

  }
//echo $_GET['ID'];
include('condb_admin.php');
?>
<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
<form action="form_edit_admin_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
 
  <div class="form-group">
    <div class="col-sm-2 control-label">
      Id :
    </div>
    <div class="col-sm-3">
      <input type="text" name="e_id" required class="form-control" autocomplete="off" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2" value="<?php echo $row['emp_id'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      Username :
    </div>
    <div class="col-sm-3">
      <input type="text" name="e_username" required class="form-control" autocomplete="off" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2" value="<?php echo $row['emp_username'];?>">
    </div>
  </div>
   <div class="form-group">
    <div class="col-sm-2 control-label">
      Password :
    </div>
    <div class="col-sm-3">
      <input type="text" name="e_password" required class="form-control" autocomplete="off" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2" value="<?php echo $row['emp_password'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      คำนำหน้า :
    </div>
    <div class="col-sm-3">
      <input type="text" name="e_prefix" required class="form-control" value="<?php echo $row['emp_prefix'];?>">
    </div>
  </div>
      <div class="form-group">
    <div class="col-sm-2 control-label">
      ชื่อ :
    </div>
    <div class="col-sm-3">
      <input type="text" name="e_name" required class="form-control" value="<?php echo $row['emp_name'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      นามสกุล :
    </div>
    <div class="col-sm-3"> 
      <input type="text" name="e_lname" required class="form-control" value="<?php echo $row['emp_lastname'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      เกิดวันที :
    </div>
    <div class="col-sm-3">
      <input type="text" name="e_date" required class="form-control" value="<?php echo $row['emp_date_of_birth'];?>">
    </div>
  </div>
   <div class="form-group">
    <div class="col-sm-2 control-label">
      เบอร์โทร :
    </div>
    <div class="col-sm-3">
      <input type="text" name="e_tel" required class="form-control" value="<?php echo $row['emp_tel'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      E-mail :
    </div>
    <div class="col-sm-3">
      <input type="email" name="e_email" required class="form-control"  value="<?php echo $row['emp_email'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      เพศ :
    </div>
    <div class="col-sm-3">
      <input type="text" name="e_gender" required class="form-control"  value="<?php echo $row['emp_gender'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ที่อยู่ :
    </div>
    <div class="col-sm-5 control-label">
      <input type="text" name="e_address" required class="form-control"  value="<?php echo $row['emp_address'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      แผนก :
    </div>
    <div class="col-sm-5 control-label">
    <select name="dep_id" id="dep_id" class="form-control">
      <option value="<?php echo $row['dep_id'] ;?>"><?php echo $row['dep_name'] ;?></option>
          <?php while($rowD = mysqli_fetch_assoc($result4)): ?>
      <option value="<?=$rowD['dep_id']?>"><?=$rowD['dep_name']?></option>
          <?php endwhile; ?>
    </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      หัวหน้า :
    </div>
    <div class="col-sm-5 control-label">
    <select name="sp_e_id" id="sp_e_id" class="form-control">
      <option value="<?php echo $row['spemp_id'] ;?>"><?php echo $row['spemp_id'] ;?></option>
          <?php while($rowE = mysqli_fetch_assoc($result3)): ?>
      <option value="<?=$rowE['emp_id']?>"><?=$rowE['emp_name']?></option>
          <?php endwhile; ?>
    </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      status :
    </div>
    <div class="col-sm-3">
    <select name="p_id" id="p_id" class="form-control">
      <option value="<?php echo $row['p_id'] ;?>"><?php echo $row['p_name'] ;?></option>
          <?php while($rowP = mysqli_fetch_assoc($result2)): ?>
      <option value="<?=$rowP['p_id']?>"><?=$rowP['p_name']?></option>
          <?php endwhile; ?>
    </select>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-3">
      <input type="hidden" name="e_id" value="<?php echo $ID; ?>" />
      <button type="submit" class="btn btn-success">แก้ไขข้อมูล</button>
      <a href="index_admin.php" class="btn btn-danger">ยกเลิก</a>
    </div>
  </div>
</form>