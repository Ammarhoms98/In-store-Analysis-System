<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";


    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// 2. استعلام الجدول الخاص بالصور
$stmt = $conn->query("SELECT * FROM photo");

// 3. الحصول على صف واحد من النتائج
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        html, body, .stage, .ring, .img {
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            user-select: none;
        }

        html, body, 
        .stage {
          overflow: hidden;
          background: #000;
        }
        div, svg {
          position: absolute;
        }

        .container {
          perspective: 2000px;
          width: 300px;
          height: 400px;
          left: 50%;
          top: 50%;
          transform: 
          translate(-50%, -50%);
        }
        div, svg {
          position: absolute;
        }

        #source-link {
  top: 60px;
}

#source-link > i {
  color: rgb(94, 106, 210);
}

#yt-link {  
  top: 10px;
}

#yt-link > i {
  color: rgb(219, 31, 106); 

}

.meta-link {
  align-items: center;
  backdrop-filter: blur(3px);
  background-color: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 6px;
  box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
  cursor: pointer;  
  display: inline-flex;
  gap: 5px;
  left: 10px;
  padding: 10px 20px;
  position: fixed;
  text-decoration: none;
  transition: background-color 600ms, border-color 600ms;
  z-index: 10000;
}

.meta-link:hover {
  background-color: rgba(255, 255, 255, 0.1);
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.meta-link > i, .meta-link > span {
  height: 20px;
  line-height: 20px;
}

.meta-link > span {
  color: white;
  font-family: "Rubik", sans-serif;
  transition: color 600ms، transform 600ms;
}

.meta-link:hover > i {
  color: rgb(255, 255, 255);
  transform: translateX(-5px);
}

.meta-link:hover > span {
  color: rgb(94, 106, 210);
  transform: translateX(5px);
}

.img {
  background-size: cover;
  background-position: center;
  backface-visibility: hidden;
  border-radius: 10px;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
  opacity: 0;
  transition: transform 600ms, opacity 600ms;
}

.img.active {
  opacity: 1;
  transform: translateZ(100px);
}

.img:nth-child(1) {
  transform: rotateY(0deg) translateZ(100px);
}

.img:nth-child(2) {
  transform: rotateY(45deg) translateZ(100px);
}

.img:nth-child(3) {
  transform: rotateY(90deg) translateZ(100px);
}

.img:nth-child(4) {
  transform: rotateY(135deg) translateZ(100px);
}

.img:nth-child(5) {
  transform: rotateY(180deg) translateZ(100px);
}

.img:nth-child(6) {
  transform: rotateY(225deg) translateZ(100px);
}

.img:nth-child(7) {
  transform: rotateY(270deg) translateZ(100px);
}

.img:nth-child(8) {
  transform: rotateY(315deg) translateZ(100px);
}

.ring {
  border: 2px solid rgba(255, 255, 255, 0.5);
  border-radius: 50%;
  height: 300px;
  width: 300px;
}

.ring:before, .ring:after {
  border-radius: 50%;
  content: "";
  height: 300px;
  position: absolute;
  width: 300px;
}

.ring:before {
  border: 2px solid rgba(255, 255, 255, 0.5);
  transform: rotateX(90deg) translateZ(-150px);
}

.ring:after {
  border: 2px solid rgba(255, 255, 255, 0.5);
  transform: rotateY(90deg) translateZ(-150px);
}

/* Animate the images */
@keyframes carousel {
  0% {
    transform: rotateY(0deg);
  }
  100% {
    transform: rotateY(-360deg);
  }
}

/* Apply animation styles to the container */
.container {
  animation: carousel 30s linear infinite;
}

    </style>
</head>
<body>
  <div class="stage">
    <div class="container">
      <div class="ring"></div>

      <?php
        // 4. حلقة تكرار لعرض الصور
        while ($row) {
          $path = $row['pathimg'];
          echo "<div class='img' style='background-image: url($path);'></div>";
          $row = $stmt->fetch(PDO::FETCH_ASSOC);
        }
      ?>

    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>
</html>