<?php
// اسم القسم المطلوب
$department_id =2;
include("conf/cone.php");

// استعلام SQL لاسترداد الوقت المعروض
$sql12 = "SELECT peak_time FROM department WHERE department_id=:department_id";
$stmt12 = $access->prepare($sql12);
$stmt12->bindParam(':department_id', $department_id);
$stmt12->execute();

// عرض النتائج في العنصر span المحدد
if ($stmt12->rowCount() > 0) {
    $row12 = $stmt12->fetch();
    $peek_time = $row12["peak_time"];
}
?>