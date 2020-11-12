<?php
session_start();
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Főoldal</title>
	<link rel="stylesheet" type="text/css" href="../css/mainStyle.css" />
	<link rel="stylesheet" type="text/css" href="../css/printStyle.css" />
	<link href="../pictures/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body>
    <header>
	</header>
	
    <nav class="nav">
        <ul>
			<li class="current"><a href="#">Főoldal</a></li>
            <?php if(!isset($_SESSION["user"]) || empty($_SESSION["user"])):?>
                <li><a href="registration.php">Regisztráció</a></li>
                <li><a href="login.php">Bejelentkezés</a></li>
            <?php else: ?>
                <li><a href="workout.php">Edzésterv</a></li>
                <li><a href="logout.php" >Kijelentkezés</a></li>
				<li class="about"><a href="profile.php" >Profil</a></li>
            <?php endif; ?>
			<li class="about"><a href="about.php">Rólunk</a></li>
			<li class="productsWidth">
				<a href="#">Termékek</a>
				<ul class="productsWidth">
					<li><a href="protein.php">Fehérjék</a></li>
					<li><a href="vitamin.php">Vitaminok</a></li>
				</ul>
			</li>
			<li class="about"><a href="contact.php">Kapcsolat</a></li>
			<li><a href="bmi.php">BMI</a></li>
		</ul>
    </nav>
	
	<main>
		<h2>Főoldal</h2>

		<h4>Üdvözlünk</h4>
		<label> Ezen a honlapon kiváló minőségű fehérjéket és vitaminokat találsz.
			Kitűnő sportolók számára, de a vitaminokat nem csak nekik, hanem midenkinek ajánljuk.
		</label>
		
		<aside> 
			<div style="float: right; width: 90px; text-align: center;">
				Webtervezés 2020 <br> <br> Készítette: Kiss Csanád <br> & <br> Szirbik Péter
			</div>
		</aside>
	</main>

	<footer>
		<label id="running"><span>Ez egy táplálékkiegészítőket áruló webshop. 
		Készítette: Kiss Csanád & Szirbik Péter</span>
		</label>
	</footer>
</body>
</html>