<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head> 
<?php 
    // print_r($_SESSION);
    include('../condb.php');
    $emp_id = $_SESSION['emp_id'];
    $emp_name = $_SESSION['emp_name'];
    $p_name = $_SESSION['p_name'];
    if($emp_id ==''){
    Header("Location: ../logout.php");
    }
    $sql = "SELECT emp.emp_name FROM ((employee as emp 
    INNER JOIN position as p ON emp.p_id = p.p_id)
    INNER JOIN department as dep ON emp.dep_id = dep.dep_id)
    WHERE (emp.emp_id=$emp_id) and (p_name =!'administrator')";
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    $row = mysqli_fetch_array($result);
    $am_name = $emp_name;
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ระบบรับสมัครงาน Work</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <!-- Google Font -->
    <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
      <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 

         <link rel="icon" type="image/x-icon" href="Icon/32-328856_job-search-icon-job.png" />
    </head>