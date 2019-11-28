<!DOCTYPE html>
<html lang="en">
	<!-- This Website Created By : Ardan Anjung Kusuma
	AI Final Project -->
<head>
	<title>Body Measurement</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/fav.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>
    <?php
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $age = $_POST['age'];
        if($gender == "men"){
            $convertM2 = $height / 100;
            $pangkat2 = $convertM2 * $convertM2;
            $resultCategory = $weight / $pangkat2;
            if($resultCategory < 18.5){
                $category = "Underweight";
            }else if($resultCategory >= 18.5 && $resultCategory <= 22.9){
                $category = "Normal Weight";
            }else if($resultCategory >= 23 && $resultCategory <=29.9){
                $category = "Overweight";
            }else if($resultCategory >= 30){
                $category = "Obesity";
            }
            $caloriesNeed = 15.3 * $weight + 679;
        }else if($gender == "women"){

        }
    ?>
	<div class="bg-contact100" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact100">
			<div class="wrap-contact100">
				<div class="contact100-pic js-tilt" data-tilt>
					<img src="images/img-02.png" alt="IMG">
				</div>

				<form class="contact100-form">
					<span class="contact100-form-title">
						Result
					</span>

                    <h5>Name: <?php echo $name ?><br>Age: <?php echo $age?><br>Height : <?php echo $height ?><br>Weight : <?php echo $weight?>
                    <br>Body Category : <?php echo $category ?><br>Calories Needed : <?php echo $caloriesNeed?> Kkal
                    </h5>
					
                    <br>
                    <center><h3><a href="index.php">Count Again</a></h3></center>
				</form>
			</div>
		</div>
	</div>




	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>

</body>

</html>