<?php
// توصيل قاعدة البيانات
$conn = mysqli_connect("localhost", "username", "password", "database_name");

// التحقق من وجود اتصال ناجح
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// جلب البيانات من قاعدة البيانات
$sql = "SELECT * FROM notifications";
$result = mysqli_query($conn, $sql);
// إظهار البيانات في الجدول
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td class='text-center'>" . $row["ID_Notifications"] . "</td>";
        echo "<td>" . $row["ID_REQUEST"] . "</td>";
        echo "<td>" . $row["TIME_Notifications"] . "</td>";
        echo "<td>" . $row["ID_DEPARTMENT"] . "</td>";
        echo "<td>" . $row["ID_CLIENT"] . "</td>";
        echo "<td class='text-center'>";
        echo "<button class='btn btn-sm btn-outline-primary edit_donor' type='button' data-id='" . $row['id'] . "'>قبول</button>";
        echo "<button class='btn btn-sm btn-outline-danger delete_donor' type='button' data-id='" . $row['id'] . "'>مشغول</button>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>لا يوجد إشعارات</td></tr>";
}

// قطع الاتصال بقاعدة البيانات
mysqli_close($conn);
?>