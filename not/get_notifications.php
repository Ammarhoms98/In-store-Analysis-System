<?php/*
// إنشاء اتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdata";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// استرداد الإشعارات الجديدة من قاعدة البيانات
$sql = "SELECT * FROM notification ";
$result = $conn->query($sql);

// تحويل البيانات إلى صيغة JSON وإرجاعها
$notifications = array();
while($row = $result->fetch_assoc()) {
	$notifications[] = $row;
}
echo json_encode($notifications);

// إغلاق الاتصال بقاعدة البيانات
$conn->close();
*/
?>





<?php


// إنشاء اتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من نجاح الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// الاستعلام عن الإشعارات الجديدة
$sql = "SELECT * FROM notifications";
$result = $conn->query($sql);

// إنشاء مصفوفة للإشعارات
$notifications = array();

// حفظ الإشعارات في المصفوفة
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $notifications[] = $row;
    }
}

// إرجاع الإشعارات بصيغة JSON
header('Content-Type: application/json');
echo json_encode($notifications);

// إغلاق الاتصال بقاعدة البيانات
$conn->close();
?>

<?php
/*
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// استرداد الإشعارات الجديدة من قاعدة البيانات
$sql = "SELECT * FROM notification WHERE n_id > DATE_SUB(NOW(), INTERVAL 5 SECOND)";
$result = $conn->query($sql);

// تحويل البيانات إلى صيغة JSON وإرجاعها
$notifications = array();
while($row = $result->fetch_assoc()) {
    $notifications[] = $row;
}
echo json_encode($notifications);

// إغلاق الاتصال بقاعدة البيانات
$conn->close();
*/

