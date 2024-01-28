




<?php

require("conf/getvedios.php");

$getv=vedget();

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>In-store Analysis System</title>
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		--><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
--><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  </head>
  <body onload = "table();">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<a class="navbar-brand" href="#">In-store Analysis System</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
            <li class="nav-item active">
							<a class="nav-link" href="conf/viewcam.php">VIEW CAMERA DETAils <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="conf/viewemp.php">EMPLOYEE</a>
						</li>
            <li class="nav-item">
							<a class="nav-link" href="login.php">LOGIN EMPLOEEY</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
    
		<div class="container mt-5">
			<h1 class="text-center">Multi-Video Page</h1>
			<div class="row mt-5">
				<div class="col-md-8">
				<style>
 
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
</style>

<div class="row mt-5">
<video src="videos/qqw.mp4" controls></video>
  <?php foreach($getv as $getv1) { ?>
    <div class="col-md-4 mb-5">
    <label><?= $getv1->name_vid?></label>
      <div class="video-wrapper">
      
    
	  <video src="<?= $getv1->video_path ?>" controls controlsList="nodownload">
        <!--<video src="<?//= $getv1->video_path ?>" controls></video>-->
        <!--</video>-->

        
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
    mohammad Torkmane, [7/11/2023 9:22 PM]
<!-- FOOTER -->
        <footer class="bg-dark bg-cover @@classList"> <br><br>
            <div class="py-12 border-bottom border-gray-700">
                <div class="container">
                    <div class="row">

                        <div class="col-6 col-md-3">

                            <!-- Heading -->
                            <h6 class="heading-xxs mb-4 text-white">
                                الدعم
                            </h6>

                            <!-- Links -->
                            <ul class="list-unstyled mb-7 mb-sm-0">
                                <li>
                                    <a class="text-gray-300" href="./index1.php">دليل</a>
                                </li>
                                <li>
                                    <a class="text-gray-300" href="./faq.html">تطوع</a>
                                </li>
                                <li>
                                    <a class="text-gray-300" data-toggle="modal" href="#modalSizeChart">تسجيل دخول المتبرعين</a>
                                </li>
                                <li>
                                    <a class="text-gray-300" href="./shipping-and-returns.html">تسجيل دخول e-system donor_blood</a>
                                </li>
                            </ul>

                        </div>
                        <div class="col-6 col-md-3">

                            <!-- Heading -->
                            <h6 class="heading-xxs mb-4 text-white">

                            </h6>

                            <!-- Links -->
                            <ul class="list-unstyled mb-7 mb-sm-0">
                                <li>
                                    <a class="text-gray-300" href="./shop.html">البسة</a>
                                </li>
                                <li>
                                    <a class="text-gray-300" href="./shop.html">موضة</a>
                                </li>
                                <li>
                                    <a class="text-gray-300" href="./shop.html">جمال</a>
                                </li>
                                <li>
                                    <a class="text-gray-300" href="./shop.html">العروض</a>
                                </li>
                            </ul>

                        </div>
                        <div class="col-6 col-md-3" >

                            <!-- Heading -->
                            <h6 class="heading-xxs mb-4 text-white" >
                                الشركة
                            </h6>

                            <!-- Links -->
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a class="text-gray-300" href="./about.html">قصتنا</a>
                                </li>
                                <li>
                                    <a class="text-gray-300" href="#!">وظائف</a>
                                </li>
                                <li>
                                    <a class="text-gray-300" href="#!">البنود والظروف</a>
                                </li>
                                <li>
                                    <a class="text-gray-300" href="#!">سياسة الخصوصية وملفات التعريف</a>
                                </li>
                            </ul>

                        </div>
                        <div class="col-6 col-md-3">

                            <!-- Heading -->
                            <h6 class="heading-xxs mb-4 text-white">
                                الاتصال
                            </h6>

mohammad Torkmane, [7/11/2023 9:22 PM]
<!-- Links -->
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a class="text-gray-300" href="#!">+963935473004</a>
                                </li>
                                <li>
                                    <a class="text-gray-300" href="#!">+963947427648</a>
                                </li>
                                <li>
                                    <a class="text-gray-300" href="#!">mohmad.turkmani@htmail.com</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <br><br>
            </div>
            <div class="py-6">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <!-- Copyright -->
                            <p  class="mb-3 mb-md-0 font-size-xxs text-muted">
                                <br>
                                © جميع الحقوق محفوظة.صمم 2021
                            </p>

                        </div>

                        <div class="col-12 col-md-3">

                            <!-- Heading -->
                            <h4 class="mb-6 text-white">تابع</h4>

                            <!-- Social -->
                            <ul class="list-unstyled list-inline mb-7 mb-md-0 text-gray-350">
                                <li class="list-inline-item">
                                    <a href="#!" class="text-reset">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#!" class="text-reset">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#!" class="text-reset">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#!" class="text-reset">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#!" class="text-reset">
                                        <i class="fab fa-medium"></i>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
    </div>
    </footer>
    
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
		<script src="script.js"></script>

  </body>
</html>



		

