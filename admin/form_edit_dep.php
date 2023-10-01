<?php
include('../condb.php');
    //echo $_GET["ID_DEP"];
    if(@$_GET['do']=='finish'){
        echo '<script type="text/javascript">
              swal("", "แก้ไขสำเร็จ !!", "success");
              </script>';
        echo '<meta http-equiv="refresh" content="1;url=agency_profile.php" />';
    
      }
    //echo $_GET['ID'];
    isset( $_GET['ID'] ) ? $ID = $_GET['ID'] : $ID = "";
    $sqlD = "SELECT dep.dep_id,dep.dep_name,dep.emp_id FROM 
    department as dep,employee as emp 
    WHERE (dep.emp_id = emp.emp_id) && dep.dep_id=$ID";
    $resultD = mysqli_query($con, $sqlD) or die ("Error in query: $sql " . mysqli_error());
    $rowD = mysqli_fetch_array($resultD);
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
    <form action="form_edit_dep_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
     
      <div class="form-group">
        <div class="col-sm-2 control-label">
          Id :
        </div>
        <div class="col-sm-3">
          <input type="text" name="d_id" required class="form-control" autocomplete="off" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2" value="<?php echo $rowD['dep_id'];?>" readonly>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2 control-label">
          Department :
        </div>
        <div class="col-sm-3">
          <input type="text" name="d_name" required class="form-control"  minlength="2" value="<?php echo $rowD['dep_name'];?>">
        </div>
      </div>
       <div class="form-group">
        <div class="col-sm-2 control-label">
          manager :
        </div>
        <div class="col-sm-3">
        <input type="text" name="d_e_id" id="d_e_id" required class="form-control" value="<?php echo $rowD['emp_id'] ;?>">
        </div>
      </div>
      
      <div class="form-group">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-3">
          <input type="hidden" name="d_id" value="<?php echo $ID; ?>" />
          <button type="submit" class="btn btn-success">แก้ไขข้อมูล</button>
          <a href="department.php" class="btn btn-danger">ยกเลิก</a>
        </div>
      </div>
    </form>
