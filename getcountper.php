<?php
// اتصال بقاعدة البيانات باستخدام PDO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // تعيين وضع الخطأ للتعامل مع الأخطاء بشكل صحيح
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // استعلام SQL لاسترداد البيانات
    $sql = "SELECT 'entry_time' as field, COUNT(*) as count FROM client WHERE entry_time IS NOT NULL UNION SELECT 'exit_time' as field, COUNT(*) as count FROM client WHERE exit_time IS NOT NULL";

    // تنفيذ الاستعلام وحفظ النتيجة في مصفوفة
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // تنسيق النتيجة في شكل JSON
    $data = array();
    foreach ($result as $row) {
        $data[] = array(
            'label' => $row['field'],
            'value' => $row['count']
        );
    }
    $data_json = json_encode($data);
} catch(PDOException $e) {
    echo "فشل الاتصال: " . $e->getMessage();
}
?>


