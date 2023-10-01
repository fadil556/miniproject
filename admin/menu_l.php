 <aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="../Icon/admin-settings-male.png"  class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>คุณ <?php echo $am_name; ?></p>
        <!-- Status -->
         <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <ul class="sidebar-menu" data-widget="tree">
        <li>
        <a href="index_admin.php"><i class="fa fa-home"></i>
          <span> หน้าหลัก</span>
        </a>
      </li>
           <li class="active">
        <a href="#"><i class="fa fa-cogs"></i> <span>จัดการข้อมูลระบบ</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-down pull-right"></i>
        </span>
      </a>
    </li>
      <li>
        <a href="agency.php"><i class="glyphicon glyphicon-record"></i>
          <span> ข้อมูลหน่วยงาน</span>
        </a>
      </li>
      <li>
        <li>
        <a href="department.php"><i class="glyphicon glyphicon-record"></i>
          <span> ข้อมูลแผนก </span>
        </a>
      </li>
           <li class="active">
        <a href=""><i class="fa fa-cogs"></i> <span>ออกจากระบบ</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-down pull-right"></i>
        </span>
      </a>
        
      <li>
        <a href="../logout.php" onclick="return confirm('คุณต้องการออกจากระบบหรือไม่ ?');"><i class="glyphicon glyphicon-off"></i>
          <span> ออกจากระบบ</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>