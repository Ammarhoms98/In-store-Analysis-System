<?php
include('conf/cone.php');
include('../conf/checklog.php');
 // بدء جلسة جديدة
$emp_id = $_SESSION['employee_id']; 
$query="SELECT COUNT(*) as count FROM notifications WHERE emp_id = $emp_id";
$stmt = $access->prepare($query);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode($result);
?>