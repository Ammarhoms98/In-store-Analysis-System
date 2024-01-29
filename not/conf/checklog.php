<?php
include('cone.php');
// إذا تم إرسال نموذج تسجيل الدخول
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // احصل على البيانات المرسلة من النموذج
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  // استعلام SQL للتحقق من صحة معلومات تسجيل الدخول
  $sql = "SELECT * FROM users WHERE username = :email AND password = :password";
  $stmt = $access->prepare($sql);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':password', $password);
  $stmt->execute();
  
  // إذا تم العثور على سجل مستخدم مطابق
  if ($stmt->rowCount() == 1) {
    // بيانات تسجيل الدخول صحيحة، يتم توجيه المستخدم إلى الصفحة الرئيسية للموقع
    header("Location: ../index.php");
    exit();
  } else {
    // بيانات تسجيل الدخول غير صحيحة، يظهر رسالة خطأ
    echo "Invalid login credentials";
  }
}

// إغلاق اتصال قاعدة البيانات
$conn = null;
?>