<?php
include("conf/cone.php");
$stmt = $access->prepare("SELECT client_id, department_name, entry_time FROM client WHERE entry_time IS NOT NULL  ");
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);



$stmt1 = $access->prepare("SELECT client_id,department_name,exit_time FROM client WHERE exit_time IS NOT NULL   ");
$stmt1->execute();
$rows1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
$in=1;
$ex=1;
//$conn = mysqli_connect("localhost", "root", "", "store");
//$rows = mysqli_query($conn, "SELECT * FROM client");
?>
<html>
  <head>
  <!--<link rel="stylesheet" href="style.css">-->
    <style>
      
      .table-container {
        display:  relative;
        flex-wrap: wrap;
      }
      .table-container table {
        width: 100%;
        flex: 1;
        margin-right: 50px;
      }
    </style>
  </head>
  <body>
    <div class="table-container">
      <table class="table table-striped" border="1" cellpadding="10">
        <tr>
          <td>client id</td>
          <td>department name</td>
          <td>entry time</td>
          <!--<td>exit time</td>-->
        </tr>
        <?php foreach($rows as $row) : ?>
          <?php //foreach($rows1 as $row1) : ?>
      <tr>
       <td> <?php echo $in++ ?></td>
        <td><?php echo $row["department_name"]; ?></td>
        <td><?php echo $row["entry_time"]; ?></td>
       <!-- <td><?php //echo $row1["exit_time"]; ?></td>-->
      </tr>
    <?php// endforeach; ?>
    <?php endforeach; ?>
      </table>
    
      <table class="table table-striped" border="1" cellpadding="10">
        <tr>
          <td>client id</td>
          <td>department_name</td>
          <td>exit time</td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($rows1 as $row1) : ?>
          <tr>
            <td><?php echo $ex++ ?></td>
            <td><?php echo $row1["department_name"]; ?></td>
            <td><?php echo $row1["exit_time"]; ?></td>
          </tr>
        <?php endforeach; ?>
      </table>

      

    </div>
   
      
  </body>
</html>




<!--entry_time!=null-->



