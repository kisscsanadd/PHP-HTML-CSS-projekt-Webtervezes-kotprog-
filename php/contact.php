<?php
session_start();
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Kapcsolat</title>
	<link rel="stylesheet" type="text/css" href="../css/mainStyle.css" />
	<link rel="stylesheet" type="text/css" href="../css/contactStyle.css" />
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
            <?php endif; ?>
			<li class="about"><a href="about.php">Rólunk</a></li>
			<li class="productsWidth">
				<a href="#">Termékek</a>
				<ul class="productsWidth">
					<li><a href="protein.php">Fehérjék</a></li>
					<li><a href="vitamin.php">Vitaminok</a></li>
				</ul>
			</li>
			<li class="current about"><a href="#">Kapcsolat</a></li>
			<li><a href="bmi.php">BMI</a></li>
		</ul>
    </nav>

	<main>
		<h2>Kapcsolat</h2>
		
		<form action="mailto:admin@admin.hu" method="post" enctype="text/plain">
				<label class="required" for="username"><b>Név</b></label>
				<input type="text" placeholder="Add meg a neved" id="username" required>

				<label class="required" for="email"><b>Email-cím</b></label>
				<input type="email" placeholder="Add meg az email címedet" id="email" required>

				<label class="required" for="message"><b>Üzenet</b></label>
				<textarea id="message" name="message" placeholder="..."></textarea>

				<button type="submit">Küldés</button>
		</form>
	</main>

	<footer>
		<label id="running"><span>Ez egy táplálékkiegészítőket áruló webshop. 
		Készítette: Kiss Csanád & Szirbik Péter</span>
		</label>
	</footer>
</body>
</html>