



<?php

require("conf/getvedios.php");
include("getcountper.php");
include("getpeek.php");

$getv=vedget();

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>In-store Analysis System</title>
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    --><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
--><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  </head>
  <body onload = "table();">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container"><centar>
				<p class="navbar-brand" align="center">In-store Analysis System</p></centar>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto">
            <li class="nav-item active">
							<a class="nav-link" href="conf/viewcam.php">VIEW CAMERA DETAILS <span class="sr-only">(current)</span></a>
						</li>
            <li class="nav-item active">
							<a class="nav-link" href="conf/viewdepart.php">VIEW DEPARTMENT DETAILS <span class="sr-only">(current)</span></a>
						</li>
            <li class="nav-item active">
							<a class="nav-link" href="viewphoto.php">VIEW PICTURES OF CLIENTS <span class="sr-only">(current)</span></a>
						</li>
            <li class="nav-item active">
							<a class="nav-link" href="conf/viewemp.php">EMPLOYEE <span class="sr-only">(current)</span></a>
						</li>
						
            <li class="nav-item">
							<a class="nav-link" href="login.php">LOGIN EMPLOEEY</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
   
   <div class="gif-image"></div>
   <div class="gif-image1"></div>
   <!--no add div -->
<style>
    .gif-image {
        width: 300px;  /* أو أي حجم تريده */
        height: 200px; /* أو أي حجم تريده */
        background: url('photo.gif') no-repeat center center;
        background-size: cover; 
        float: right;
    }
    .gif-image1 {
        width: 300px;  /* أو أي حجم تريده */
        height: 200px; /* أو أي حجم تريده */
        background: url('yt.gif') no-repeat center center;
        background-size: cover; 
        float: right;
    }
</style>
  
  
  <div class="card-body d-flex">
       
	
              <div class="col-md-6">
        <div class="card">
            <div class="card-header d-flex">
                <div class="card-title mr-auto">
                    <h6>Increase customers daily</h6>
                </div>
                
            </div>
            <div class="card-body">
            <p class="entrants-text">ENTRANTS:<?php echo "\t" . $result[0]['count']; ?></p>

<style>
    .entrants-text {
        color: red;  /* يغير لون النص إلى الأحمر */
        font-weight: bold; /* يجعل النص سميكًا */
    }
    .card-body d-flex{
    float: center;
    }
    
</style>
                <div class="chart">

                <canvas id="doughnutChart"></canvas>
                </div>
            </div>
          
        </div>
        
       <div class='visit-time'><span>peek time:<?= date("h:i A", strtotime($peek_time)) ?></span></div>
        
    </div>
</div>

</div>
				<style>
          .visit-time {
  display: flex;
  justify-content: center;
  align-items: center;
  border: 2px solid #858585;
}
 
  .video-wrapper {
    position: relative;
    padding-bottom: 56.25%;
    /* Set aspect ratio of video */
    height: 0;
    margin-bottom: 15px;
  }
  .video-wrapper video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }
  
footer{
  background: #111;
  
}
</style>
<div>

<div class="row mt-5">

  <?php foreach($getv as $getv1) { ?>
    <div class="col-md-4 mb-5">
    <label><?= $getv1->name_vid?></label>
      <div class="video-wrapper">
      
    
	  <video src="<?= $getv1->video_path ?>" controls controlsList="nodownload">
        <!--<video src="<?//= $getv1->video_path ?>" controls></video>-->
        <!--</video>-->

  </video>
      </div>
    </div>
  <?php } ?>


</div>




    <script type="text/javascript">
      function table(){
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
          document.getElementById("table").innerHTML = this.responseText;
        }
        xhttp.open("GET", "system1.php");
        xhttp.send();
      }

      setInterval(function(){
        table();
      }, 3000);
    </script>
    <div id="table">

    </div>



  








<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
<!--daterangepicker and moment and inputmask-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.9/jquery.inputmask.bundle.min.js" integrity="sha512-VpQwrlvKqJHKtIvpL8Zv6819FkTJyE1DoVNH0L2RLn8hUPjRjkS/bCYurZs0DX9Ybwu9oHRHdBZR9fESaq8Z8A==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.js" integrity="sha512-mh+AjlD3nxImTUGisMpHXW03gE6F4WdQyvuFRkjecwuWLwD2yCijw4tKA3NsEFpA1C3neiKhGXPSIGSfCYPMlQ==" crossorigin="anonymous"></script>    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<?php
// تحديد الألوان الخاصة بالداخلين والخارجين
$colors = array('#ff6384', '#36a2eb');
?>
<script>
    // استخدام البيانات المنسقة لإنشاء الرسم البياني
    var ctxL = document.getElementById("doughnutChart").getContext('2d');
    var myDoughnutChart = new Chart(ctxL, {
      type: 'doughnut',
      data: {
        labels: [
          '<?php echo $result[0]['field']; ?>',
          '<?php echo $result[1]['field']; ?>'
        ],
        datasets: [{
          data: [
            '<?php echo $result[0]['count']; ?>',
            '<?php echo $result[1]['count']; ?>'
          ],
          backgroundColor: <?php echo json_encode($colors); ?>
        }]
      },
      options: {
        responsive: true,
        legend: {
          display: true
        }
      }
    });
    setInterval(function() {
  // إنشاء طلب AJAX للحصول على البيانات الجديدة
  $.ajax({
    url: 'getcountper.php',
    type: 'GET',
    dataType: 'json',
    success: function(data) {
      // تحديث البيانات داخل المخطط
      myDoughnutChart.data.labels = [data[0].field, data[1].field];
      myDoughnutChart.data.datasets[0].data = [data[0].count, data[1].count];
      myDoughnutChart.update();
    },
    error: function() {
      console.log('حدث خطأ أثناء جلب البيانات الجديدة');
    }
  });
}, 13000);

</script>
    
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    
		<script src="script.js"></script>
    <footer> <div class="container text-white py-5">
       <p>IN-STORE TRAFFIC ANALYTICS </p>
        <ul> <li><a href="https://www.facebook.com/yourcompany"><i class="fab fa-facebook-f"></i> Facebook</a></li>
         <li><a href="https://www.instagram.com/yourcompany"><i class="fab fa-instagram"></i> Instagram</a></li>
          <li><a href="tel:+123456789"><i class="fas fa-phone"></i> Phone</a></li> <li>
            <a href="mailto:info@yourcompany.com"><i class="far fa-envelope"></i> Email</a></li> </ul>
           </div> </footer>

 


<!--<script>
    function updateChartData() {
        // استخدام AJAX لاسترداد البيانات الجديدة من الخادم
        $.ajax({
            url: "getcountper.php",
            success: function(data) {
                // تحديث بيانات الرسم البياني باستخدام البيانات الجديدة
                myDoughnutChart.data.datasets[0].data = <?php //echo $result[0]['count']; ?>];
                myDoughnutChart.data.datasets[1].data = [<?php //echo $result[1]['count']; ?>];
                myDoughnutChart.update();
            }
        });
    }

    // تحديث البيانات كل دقيقة باستخدام setInterval()
    setInterval(function(data) {
        updateChartData();
    },13000); // تحديث البيانات كل دقيقة (60 ثانية)
</script>-->
		

</body>
</html>