<?php
include('../condb.php');
isset( $_GET['ID'] ) ? $ID = $_GET['ID'] : $ID = "";
$sql = "SELECT * FROM ((employee as emp 
INNER JOIN position as p ON emp.p_id = p.p_id) 
INNER JOIN department as dep ON emp.dep_id = dep.dep_id)
WHERE emp.emp_id=$ID";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);


$sqlP = "SELECT * FROM position";
$result2 = mysqli_query($con, $sqlP);

$sqlE = "SELECT * FROM employee";
$result3 = mysqli_query($con, $sqlE);

$sqlD = "SELECT * FROM department";
$result4 = mysqli_query($con, $sqlD);


?>