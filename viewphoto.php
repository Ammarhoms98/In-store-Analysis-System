<!DOCTYPE html>
<html>
<head>
	<title>Pictures of clients of the jewelry department</title>
	<style>
		
body{
    background: url("backwall.jpg") no-repeat center fixed;
    background-size: cover;
}
		h1 {
			text-align: center;
			color: #333;
		}

		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
		}

		.card {
			background-color: #fff;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			margin: 10px;
			flex: 1 0 33%;
			max-width: 33%;
			text-align: center;
			padding: 20px;
			border-radius: 5px;
			overflow: hidden;
		}

		.card img {
			width: 100%;
			height: auto;
			transition: all 0.3s ease-in-out;
		}

		.card:hover img {
			transform: scale(1.1);
		}

		.card h3 {
			color: #333;
			margin-top: 10px;
			margin-bottom: 5px;
			font-size: 20px;
		}

		.card p {
			color: #666;
			font-size: 16px;
			margin: 0;
		}
	</style>
</head>
<body>
	<h1>Pictures of clients of the jewelry department</h1>
	<div class="container">
		<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "store";

		try {
		    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		    $sql = "SELECT * FROM photo";
		    $stmt = $conn->prepare($sql);
		    $stmt->execute();

		    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $i=1;

		    if ($stmt->rowCount() > 0) {
		        foreach($stmt->fetchAll() as $row) {
		            $imgPath = $row['pathimg'];
		            echo "<div class='card'>";
		            echo "<img src='$imgPath' alt='CLIENT PHOTO'>";
		            echo "<h3> CLIENT PHOTO $i </h3>";
                     $i++;
		            echo "</div>";
		        }
		    } else {
		        echo "0 results";
		    }

		    $conn = null;
		}
		catch(PDOException $e) {
		    echo "Connection failed: " . $e->getMessage();
		}
		?>
	</div>
</body>
</html>
<script>
	const cards = document.querySelectorAll('.card');
	
	cards.forEach(card => {
		card.addEventListener('click', () => {
			card.classList.toggle('active');
		});
	});
</script>