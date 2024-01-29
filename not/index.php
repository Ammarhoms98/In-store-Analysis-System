<?php
include('cone.php');
include('../conf/checklog.php');
session_start(); // بدء جلسة جديدة
$emp_nm = $_SESSION['name']; 
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>

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
    <!--<span class="counter">0</span>-->
    <i class="fas fa-bell" style="font-size: 20px;"></i>
    <?php echo $emp_nm;?>
</div>
<div id="notification"> </div> </div> </li> </ul> </nav> </div> </div>
  
    <div class="container mt-4">

        <?php //include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>NOTIFICATIONS DETAILS
                        <a href="../login.php" class="btn btn-primary float-end">LOGOUT </a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <table id="notifications-table" class="table table-bordered table-striped">
                    <thead>
                                <tr>
                                    <th>notification_id</th>
                                    
                                    <th>department_id</th>
                                    <th>DEPARTMENT NAME</th>
                                    <th>notifications_time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                    <script>
  function updateTable() {
    $.ajax({
      url: 'get.php',
      dataType: 'json',
      success: function(data) {
        var html = '';
        for (var i = 0; i < data.length; i++) {
          html += '<tr>';
          html += '<td>' + data[i].notification_id + '</td>';
          html += '<td>' + data[i].department_id + '</td>';
          html += '<td>' + data[i].department_name + '</td>';
          html += '<td>' + data[i].notifications_time + '</td>';
          html += '<td>';
          html += '<form action="ok1.php" method="POST" class="d-inline">';
          html += '<button type="submit" name="deletup" value="' + data[i].notification_id + '" class="btn btn-primary btn-sm">تمت المساعدة</button>';
          html += '</form>';
          html += '<form action="ok.php" method="POST" class="d-inline">';
          html += '<button type="submit" name="ubdatbusy" value="' + data[i].notification_id + '" class="btn btn-success btn-sm">قبول </button>';
          html += '</form>';
          html += '</td>';
          html += '</tr>';
        }
        $('#notifications-table tbody').html(html);
      }
    });
  }

  $(document).ready(function() {
    updateTable();
    setInterval(updateTable, 13000); // call updateTable every 13 seconds
  });

</script>

</tbody>
                        </table>