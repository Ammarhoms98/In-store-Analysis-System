<?php
include('cone.php');
$last_id = $_POST['last_id'];

$query = "SELECT * FROM notifications WHERE notification_id > $last_id";
$stmt = $access->prepare($query);
$stmt->execute();

$notifications = array();
if($stmt->rowCount() > 0)
{
   while($not = $stmt->fetch(PDO::FETCH_ASSOC))
   {
      $notifications[] = $not;
   }
}

echo json_encode($notifications);
?>