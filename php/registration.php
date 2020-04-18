<?php include "functions.php"; ?>

<!DOCTYPE html>
<html  lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Regisztráció</title>
	<link rel="stylesheet" type="text/css" href="../css/mainStyle.css" />
	<link rel="stylesheet" type="text/css" href="../css/login-reg-style.css" />
	<link rel="stylesheet" type="text/css" href="../css/printStyle.css" />
	<link href="../pictures/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body>
    <header>
	</header>
	
    <nav class="nav">
        <ul>
			<li><a href="main.php">Főoldal</a></li>
			<li class="current"><a href="#">Regisztráció</a></li>
			<li><a href="login.php">Bejelentkezés</a></li>
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
			<li><a href="workout.php">Edzésterv</a></li>
		</ul>
    </nav>
	
	<main>
		<h2>Regisztráció</h2>
		
		<section>
			<form action="registration.php" method="post">
				<div id="imgcontainer">
					<img src="../pictures/avatar.png" alt="Avatar" id="avatar">
					<img src="../pictures/regLogo.png" alt="REG" id="logo">
				</div>

				<div class="logRegFooterContainer">
					<label class="required" for="username"><b>Felhasználónév</b></label>
					<input type="text" placeholder="Add meg a felhasználóneved" id="username" name="username" required>

					<label class="required" for="email"><b>Email-cím</b></label>
					<input type="email" placeholder="Add meg az email címedet" id="email" name="email" required>

					<label class="required" for="emaila"><b>Email-cím megerősítés</b></label>
					<input type="email" placeholder="Add meg még egyszer az email címedet" id="emaila" name="email2" required>

					<label class="required" for="pw"><b>Jelszó</b></label>
					<input type="password" placeholder="Add meg a jelszavad" id="pw" name="password" required>

					<label class="required" for="pwa"><b>Jelszó megerősítés</b></label>
					<input type="password" placeholder="Add meg még egyszer a jelszavad" id="pwa" name="password2" required>

					<label for="phone"><b>Telefonszám</b></label>
					<input type="tel" placeholder="Add meg a telefonszámod" id="phone" name="phone">

					<button type="submit" name="signup">Regisztráció</button>
				</div>

				<div class="logRegFooterContainer" style="background-color:#b0dffa">
					<button onclick="location.href = 'main.html';" type="button" id="cancelbtn">Vissza</button>
				</div>
			</form>
			
			<?php
				$accounts = loadUsers("database.txt");
			
				$username = "";
				$email = "";
				$email2 = "";
				$pass = "";
				$pass2 = "";
				$phone = "";
				
				$errors = [];
				
				if(isset($_POST["signup"])) {
					
					$username = $_POST["username"];
					$email = $_POST["email"];
					$email2 = $_POST["email2"];
					$pass = $_POST["password"];
					$pass2 = $_POST["password2"];
					$phone = $_POST["phone"];
					
					foreach($accounts as $account) {
						if($account["username"] === $username) {
							$errors[] = "A felhasználónév már foglalt!";
						}
					}
					
					if (strlen($pass) < 5) {
						$errors[] = "A jelszó túl rövid!";
					}
					
					if($email !== $email2) {
						$errors[] = "A két email címnek meg kell egyezzen!";
					}
					
					if($pass !== $pass2) {
						$errors[] = "A két jelszónak meg kell egyezzen!";
					}
					
					if(strlen($phone) !== 11) {
						$errors[] = "A telefonszám hossza nem megfelelő!";
					}
					
					if(count($errors) === 0) {
						echo "Sikeres regisztráció! <br>";
						
						$data = [
							"username" => $username,
							"email" => $email,
							"password" => $pass,
							"phone" => $phone
						];
						
						saveUser("database.txt", $data);
					} else {
						foreach($errors as $error) {
							echo $error . "<br>";
						}
					}	
				}
			?>

		
		</section>
	</main>

	<footer>
		<label id="running"><span>Ez egy táplálékkiegészítőket áruló webshop. 
		Készítette: Kiss Csanád & Szirbik Péter</span>
		</label>
	</footer>
</body>
</html>