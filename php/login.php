<?php
session_start();

if(isset($_SESSION["user"]) || !empty($_SESSION["user"])){
    header("Location: main.php");
    exit();
}

include "functions.php"; ?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Bejelentkezés</title>
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
                <li class="current"><a href="#">Bejelentkezés</a></li>
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
		<h2>Bejelentkezés</h2>

		<form action="login.php" method="post">
			<div id="imgcontainer">
				<img src="../pictures/loginAvatar.jpg" alt="Avatar" id="avatar">
			</div>

			<div class="logRegFooterContainer">
				<label for="username"><b>Felhasználónév</b></label>
				<input type="text" placeholder="Add meg a felhasználóneved" id="username" name="username" required>

				<label for="pw"><b>Jelszó</b></label>
				<input type="password" placeholder="Add meg a jelszavad" id="pw" name="password" required>

				<button type="submit" name="login" >Bejelentkezés</button>
				<label>
					<input type="checkbox" checked="checked" name="remember"> Jegyezz meg
				</label>
			</div>

			<div class="logRegFooterContainer" style="background-color:#b0dffa">
				<button onclick="location.href = 'main.php';" type="button" id="cancelbtn">Vissza</button>
				<span><a id="forgetpw" href="forgetpw.php">Elfelejtetted a jelszavad?</a></span>
			</div>
		</form>

        <?php
        $accounts = loadUsers("database.txt");

        $user = "";
        $pass = "";

        if (isset($_POST["login"])) {

            $user = $_POST["username"];
            $pass = $_POST["password"];


            $user_data = array();
            $success_login = false;

            foreach($accounts as $account){
                if($user === $account["username"] && $pass === $account["password"]){
                    $msg = "sikeres belepes";
                    $user_data["username"] = $account["username"];
                    $user_data["email"] = $account["email"];
                    $user_data["phone"] = $account["phone"];
                    $user_data["date"] = $account["date"];
                    $_SESSION["user"] = $user_data;

                    $success_login = true;

                    break;
                }
            }
            if($success_login){
                $_SESSION["user"] = $user_data;
                header("Location: profile.php");
            }else{
                echo "Sikertelen belépés, próbáld újra!";
            }
            // Csak akkor lehessen belépni, ha a felhasználónév-jelszó páros helyes!

        }
        ?>
	</main>

	<footer>
		<label id="running"><span>Ez egy táplálékkiegészítőket áruló webshop. 
		Készítette: Kiss Csanád & Szirbik Péter</span>
		</label>
	</footer>
</body>
</html>