<?php
// ...
include('cone.php');
include('../conf/checklog.php');
session_start(); // بدء جلسة جديدة
$emp_id = $_SESSION['employee_id']; 

//echo $emp_id;// استرداد رقم الموظف من الجلسة
$query = "SELECT * FROM notifications WHERE emp_id = $emp_id";
$stmt = $access->prepare($query);
$stmt->execute();

$rows = array();
if ($stmt->rowCount() > 0) {
    while ($not = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $rows[] = $not;
    }
}
echo json_encode($rows);
?>