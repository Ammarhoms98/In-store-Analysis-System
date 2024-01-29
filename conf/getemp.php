<?php
// ...
include('cone.php');
$query = "SELECT * FROM employs ORDER BY department_id;";
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