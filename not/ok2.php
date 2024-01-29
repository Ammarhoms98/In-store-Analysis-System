<?php/*
include('conf/cone.php');
session_start(); // بدء جلسة جديدة
$emp_id = $_SESSION['employee_id']; 
if(isset($_POST['ubdatbusy']) && !empty($_POST['ubdatbusy'])){
    $id = $_POST['ubdatbusy'];
    $query = "UPDATE employs SET status_emp='busy' WHERE emp_id= $emp_id";
    //$query = "UPDATE notifications SET client_sex='bbb' WHERE notification_id=?";
    //$query1 = "DELETE FROM notifications WHERE department_id = (SELECT department_id FROM employs WHERE emp_id = $emp_id) AND emp_id != $emp_id AND notification_id=?";
    $stmt = $access->prepare($query);
    $stmt1 = $access->prepare($query1);
    $stmt->execute();
    //$stmt1->execute([$id]);
    header("location:index.php");
    exit(); // استخدام exit() بدلاً من die()
}*/
?>