<?php
session_start();
?>

<!DOCTYPE html>
<html  lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Fehérjék</title>
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
					<li class="current"><a href="#">Fehérjék</a></li>
					<li><a href="vitamin.php">Vitaminok</a></li>
				</ul>
			</li>
			<li class="about"><a href="contact.php">Kapcsolat</a></li>
			<li><a href="bmi.php">BMI</a></li>
		</ul>
    </nav>
	
	<main>
		<h2>Fehérjék</h2>
		
		<div class="vitaminsContainer">
			<div class="image">
				<div class="productDescription">
					✔ 100% Tejsavó fehérje izolátum <br>
					✔ 27 g fehérje adagonként <br>
					✔ Növeli az izomtömeget a zsírszövet erősítése nélkül. <br>
					✔ Segít az erőkifejtés utáni gyors regenerálódásban <br>
					✔ Egy új keverési technológia és aroma
				</div>
				<img class="multi" src="../pictures/iWheyIso.png" alt="iWhey"><br>
				<label>iWhey Isolate 900g</label><br>
				<label>8999 Ft</label>
			</div>
			<div class="image">
				<div class="productDescription">
					✔ 24g fehérje adagonként <br>
					✔ 100% nyers fehérje <br>
					✔ Aromák és édesítők nélkül <br>
					✔ Keverési szint: Instant <br>
					✔ 5,5g BCAA adagonként <br>
					✔ Gyors felvétel <br>
					✔ Prémium minőség
				</div>
				<img class="multi" src="../pictures/preciseWhey.png" alt="Prices Whey"><br>
				<label>Precise Whey 2kg</label><br>
				<label>14799 Ft</label>
			</div>
			<div class="image">
				<div class="productDescription">
					✔ A piacon jelenleg elérhető leggyorsabban felszívódó fehérje. <br>
					✔ Egy tökéletes kombináció a tejsav fehérje hidrolizátum 
						és a PeptoPro között. <br>
					✔ A nagy felszívódási sebességnek köszönhetően ez egy ideális 
						termék a hivatásos sportolók számára 
				</div>
				<img class="multi" src="../pictures/hydroHD.png" alt="HydroHD"><br>
				<label>HydroHD 700g</label><br>
				<label>12299 Ft</label>
			</div>
			<div class="image">
				<div class="productDescription">
					✔ Felsőkategóriás prémium fehérjerúd <br>
					✔ Tejből kivont fehérje izolátum <br>
					✔ Természetesen szűrve <br>
					✔ Nagy BCAA tartalom <br>
					✔ Pálmaolaj, glutén és szója mentes.
				</div>
				<img class="multi" src="../pictures/iBarZero.png" alt="iBarZero"><br>
				<label>iBar Zero 50g</label> <br>
				<label>571 Ft</label>
			</div>
			<div class="image">
				<div class="productDescription">
					✔ Kenhető fehérje krém csokoládéval és földimogyoróval <br>
					✔ Rendkívüli és eredeti ízzel rendelkezik <br>
					✔ Nem tartalmaz hozzáadott cukrot <br>
					✔ A legmagasabb minőségű íróból származó természetesen 
						szűrt fehérje izolátumból gyártva.
				</div>
				<img class="multi" src="../pictures/ISPREAD.png" alt="iSPREAD"><br>
				<label>iSPREAD 250g</label> <br>
				<label>1966 Ft</label>
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