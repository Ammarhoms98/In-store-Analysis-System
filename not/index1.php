<!DOCTYPE html>
<html>
<head>
	<title>استقبال الإشعارات الجديدة باستخدام AJAX</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- إضافة رابط jQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/6b23de7647.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<style>
    
table {
  width: 50%;
  border-collapse: collapse;
}

th, td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {
  background-color: #f5f5f5;
}

thead tr th {
  background-color: #4CAF50;
  color: white;
}

.btn {
  border-radius: 0px;
  margin-right: 5px;
}

.btn-outline-primary {
  color: #007bff;
  background-color: transparent;
  border-color: #007bff;
}

.btn-outline-primary:hover {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-outline-danger {
  color: #dc3545;
  background-color: transparent;
  border-color: #dc3545;
}

.btn-outline-danger:hover {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.float-right {
  float: right;
}

.float-left {
  float: left;
}

.card-header {
  background-color: #4CAF50;
  color: white;
  padding: 10px;
}

.card-body {
  padding: 0px;
}

.card {
  margin-top: 20px;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
    

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
<div class="card-body">
            <table class="table table-condensed table-bordered table-hover">
              <thead>
                <tr>
                  <th class="text-center">ID Notifications</th>
                  <th class="">ID REQUEST</th>
                  <th class="">TIME Notifications</th>
                  <th class="">ID DEPARTMENT</th>
                  <th class="">ID CLIENT</th>
                  <th class="">STATUS</th>
                </tr>
                <tr>
                  <td class="text-center">ID Notifications</td>
                  <td class="">ID REQUEST</td>
                  <td class="">TIME Notifications</td>
                  <td class="">ID DEPARTMENT</td>
                  <td class="">ID CLIENT</td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-primary edit_donor" type="button" data-id="<?//php echo $row['id'] ?>" >قبول</button>
                    <button class="btn btn-sm btn-outline-danger delete_donor" type="button" data-id="<?//php echo $row['id'] ?>">مشغول</button>
                 
                </tr>
              </thead>
              <tbody>
</table>
   <script type="text/javascript">
  function table(){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
      document.getElementById("table").innerHTML = this.responseText;
    }
    xhttp.open("GET", "get_table_data.php");
    xhttp.send();
  }

  setInterval(function(){
    table();
  }, 5000);
</script>

<div id="table"></div>
</script>
</body>
</html>