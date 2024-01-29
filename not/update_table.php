<?php
include("cone.php");
$stmt = $conn->prepare("SELECT client_id, department_id, entry_time FROM client WHERE entry_time IS NOT NULL");
$stmt->execute();
$entry_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt1 = $conn->prepare("SELECT client_id,department_id,exit_time FROM client WHERE exit_time IS NOT NULL");
$stmt1->execute();
$exit_rows = $stmt1->fetchAll(PDO::FETCH_ASSOC);
$in=1;
$ex=1;
?>
<html>
  <head>
    <style>
      .table-container {
        display: flex;
        flex-wrap: wrap;
      }
      .table-container table {
        width: 100%;
        margin-right: 10px;
      }
    </style>
  </head>
  <body>
    <div class="table-container">
      <table class="table table-striped" border="1" cellpadding="10">
        <tr>
          <td>client id</td>
          <td>department</td>
          <td>entry time</td>
        </tr>
        <?php foreach($entry_rows as $row) : ?>
      <tr>
       <td> <?php echo $in++ ?></td>
        <td><?php echo $row["department_id"]; ?></td>
        <td><?php echo $row["entry_time"]; ?></td>
      </tr>
    <?php endforeach; ?>
      </table>
    </div>
  </body>
</html>