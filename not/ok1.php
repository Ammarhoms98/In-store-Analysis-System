<?php

include('conf/cone.php');
session_start(); // بدء جلسة جديدة
$emp_id = $_SESSION['employee_id']; 

if(isset($_POST['deletup']) && !empty($_POST['deletup'])){
        $id = $_POST['deletup'];
        $query = "DELETE FROM notifications WHERE notification_id=?";
        $query1 = "UPDATE employs SET status_emp='available' WHERE emp_id= $emp_id";
        $query2 = "ALTER TABLE notifications AUTO_INCREMENT = notification_id-1";
        $stmt = $access->prepare($query);
        $stmt1 = $access->prepare($query1);
        $stmt2 = $access->prepare($query2);
        $stmt->execute([$id]);
        $stmt1->execute();
        $stmt2->execute();
        echo 'ammar';
        header("location:index.php");
        die();
        // أي رسالة تأكيد أو تنبيه يمكن إضافتها هنا.
    }
?>