<?php

include('conf/cone.php');
session_start(); // بدء جلسة جديدة
$emp_id = $_SESSION['employee_id']; 
if(isset($_POST['ubdatbusy']) && !empty($_POST['ubdatbusy'])){
        //$id = $_POST['ubdatbusy'];
        $query = "UPDATE employs SET status_emp='busy' WHERE emp_id= $emp_id";
        $stmt = $access->prepare($query);
        $stmt->execute();
        echo 'ammar';
        header("location:index.php");
        die();
        // أي رسالة تأكيد أو تنبيه يمكن إضافتها هنا.
    }
?>