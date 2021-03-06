<?php
session_start();
?>

<!DOCTYPE html>
<html  lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Vitaminok</title>
	<link rel="stylesheet" type="text/css" href="../css/mainStyle.css" />
	<link rel="stylesheet" type="text/css" href="../css/productStyle.css" />
	<link rel="stylesheet" type="text/css" href="../css/printStyle.css" />
	<link href="../pictures/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body>
    <header>
	</header>
	
    <nav class="nav">
        <ul>
			<li><a href="main.php">Főoldal</a></li>
            <?php if(!isset($_SESSION["user"]) || empty($_SESSION["user"])):?>
                <li><a href="registration.php">Regisztráció</a></li>
                <li><a href="login.php">Bejelentkezés</a></li>
            <?php else: ?>
                <li><a href="workout.php">Edzésterv</a></li>
                <li><a href="logout.php" >Kijelentkezés</a></li>
				<li class="about"><a href="profile.php" >Profil</a></li>
            <?php endif; ?>
			<li class="about"><a href="about.php">Rólunk</a></li>
			<li class="current productsWidth">
				<a href="#">Termékek</a>
				<ul class="productsWidth">
					<li><a href="protein.php">Fehérjék</a></li>
					<li class="current"><a href="#">Vitaminok</a></li>
				</ul>
			</li>
			<li class="about"><a href="contact.php">Kapcsolat</a></li>
			<li><a href="bmi.php">BMI</a></li>
		</ul>
    </nav>
	
	<main>
		<h2>Vitaminok</h2>

		<div class="vitaminsContainer">
			<div class="image">
				<div class="productDescription">
					✔ Létfontosságú vitamin és ásványi anyag-komplex <br>
					✔ C vitamin <br>
					✔ B12 vitamin <br>
					✔ Szelén <br>
					✔ Koenzim Q10 (vitamin-szerű anyag)
				</div>
				<img class="multi" src="../pictures/multi1.png" alt="EURO VITA-MINS"><br>
				<label>EURO VITA-MINS</label><br>
				<label>2499 Ft</label>
			</div>
			<div class="image">
				<div class="productDescription">
					✔ 10 féle ásványi anyag<br>
					✔ Kalcium <br>
					✔ Magnézium <br>
					✔ Vas
				</div>
				<img class="multi" src="../pictures/multi2.png" alt="ATHLETIC LINE"><br>
				<label>ATHLETIC LINE</label><br>
				<label>2799 Ft</label>
			</div>
			<div class="image">
				<div class="productDescription">
					✔ Extra C vitamin tartalom <br>
					✔ D3 vitamin <br>
					✔ B vitamin <br>
					✔ Halolaj
				</div>
				<img class="multi" src="../pictures/multi3.jpg" alt="MEGA DAILY ONE"><br>
				<label>MEGA DAILY ONE</label><br>
				<label>3999 Ft</label>
			</div>
			<div class="image">
				<div class="productDescription">
					✔ Ízület-karbantartást támogató komplex <br>
					✔ 8 KOMPONENSŰ FORMULA <br>
					✔ II. típusú kollagén <br>
					✔ C vitamin <br>
					✔ Mangán
				</div>
				<img class="multi" src="../pictures/multi4.jpg" alt="ARTHROXON PLUS"><br>
				<label>ARTHROXON PLUS</label> <br>
				<label>1959 Ft</label>
			</div>
		</div>
	</main>

	<footer>
		<label id="running"><span>Ez egy táplálékkiegészítőket áruló webshop. 
		Készítette: Kiss Csanád & Szirbik Péter</span>
		</label>
	</footer>
</body>
</html>