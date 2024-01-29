<?php
include('cone.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      body {
  background-color: red;
}
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/6b23de7647.js" crossorigin="anonymous"></script>
    <title> MY ACCOUNT </title>
</head>
<body>

<div class="container-fluid mb-5">
    <div class="container mt-3">
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <strong>LIVE NOTIFICATION</strong>
            </a> 
            <ul class="nav justify-content-end">
                <li class="dropdown">
                <div class="dropdown-toggle text-light" id="noti_count" style="cursor: pointer;" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="showNotifications()">
    <span class="counter">0</span><i class="fas fa-bell" style="font-size: 20px;"></i>
    </div>
                    <div class="dropdown-menu overflow-h-menu dropdown-menu-right">
                        <div id="notification"></div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
  
    <div class="container mt-4">

        <?php //include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>NOTIFICATIONS DETAILS
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>notification_id</th>
                                    <th>notification_id</th>
                                    <th>department_id</th>
                                    <th>DEPARTMENT NAME</th>
                                    <th>client_id</th>
                                    <th>notifications_time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            <?php 
    //$pdo = new PDO('mysql:host=localhost;dbname=database_name', 'username', 'password');
    $query = "SELECT * FROM notifications";
    $stmt = $access->prepare($query);
    $stmt->execute();

    if($stmt->rowCount() > 0)
    {
       while($not = $stmt->fetch(PDO::FETCH_ASSOC))
       {
?>
            <tr>
                <td><?= $not['notification_id']; ?></td>
                <td><?= $not['request_id']; ?></td>
                <td><?= $not['department_id']; ?> </td>
                <td><?= $not['department_name']; ?></td>
                <td><?= $not['department_name']; ?></td>
                <td><?= $not['notifications_time']; ?></td>
                <td>
                <form action="ok1.php" method="POST" class="d-inline">
                        <button type="submit" name="deletup" value="<?= $not['notification_id'];?>" class="btn btn-primary btn-sm">تمت المساعدة</button>
       </form>
                   <!-- <a href="#=" class="btn btn-info btn-sm"> تمت المساعدة </a>-->
                   <form action="ok.php" method="POST" class="d-inline">
                        <button type="submit" name="ubdatbusy" value="1" class="btn btn-success btn-sm">قبول </button>
                        </form>
                </td>
            </tr>
<?php 
        }
    } 
?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>