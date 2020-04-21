<?php
session_start();
include "functions.php"; ?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Elfelejtett jelszó</title>
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
			<li class="about"><a href="contact.php">Kapcsolat</a></li>
			<li><a href="bmi.php">BMI</a></li>
		</ul>
    </nav>
	
	<main>
		<h2>Elfelejtett jelszó</h2>

		<form action="forgetpw.php" method="post">
			<div id="imgcontainer">
				<img src="../pictures/loginAvatar.jpg" alt="Avatar" id="avatar">
			</div>

			<div class="logRegFooterContainer">
				<label for="username"><b>Felhasználónév</b></label>
				<input type="text" placeholder="Add meg a felhasználóneved" id="username" name="username" required>

				<label for="pw"><b>Új jelszó</b></label>
				<input type="password" placeholder="Add meg a jelszavad" id="pw" name="new_pw" required>

				<button type="submit" name="confirm">Megerősít</button>
			</div>
		</form>
	</main>
	
	<?php
		$accounts = loadUsers("database.txt");
		
		$username = "";
		$new_password = "";
		
		$errors = [];
		$match = False;
	
		if (isset($_POST['confirm'])) {
			$username = $_POST['username'];
			$new_password = $_POST['new_pw'];
			
			if (strlen($new_password) < 5) {
				$errors[] = "A jelszó túl rövid!";
			}
			
			deleteUsers("database.txt");
			
			foreach($accounts as $account) {
				if($account["username"] === $username) {
					
					$account["password"] = $new_password;
					$match = True;
					
					echo "<span style='color: blue'>"."Sikeres jelszó frissítés!"."</span>". "<br>";
				}
				
				saveUser("database.txt", $account);
			}
			
			if($match === False) {
				$errors[] = "Nincs ilyen felhasználónév";
			}
			
			foreach($errors as $error) {
				echo "<span style='color: red'>".$error."</span>". "<br>";
			}
		}
	?>

	<footer>
		<label id="running"><span>Ez egy táplálékkiegészítőket áruló webshop. 
		Készítette: Kiss Csanád & Szirbik Péter</span>
		</label>
	</footer>
</body>
</html>