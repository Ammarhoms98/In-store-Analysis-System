
<?php

include('cone.php');

if(isset($_POST['delete_student']) && !empty($_POST['delete_student'])){
        $id = $_POST['delete_student'];
        $query = "DELETE FROM cameras WHERE camera_id = ?";
        $stmt = $access->prepare($query);
        $stmt->execute([$id]);
        header("location:viewcam.php");
        // أي رسالة تأكيد أو تنبيه يمكن إضافتها هنا.
    }
?>