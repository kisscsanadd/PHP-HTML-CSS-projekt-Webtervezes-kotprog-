<?php
session_start();
if(!(isset($_SESSION["user"])) || empty($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Edzésterv</title>
    <link rel="stylesheet" type="text/css" href="../css/mainStyle.css" />
    <link rel="stylesheet" type="text/css" href="../css/printStyle.css" />
    <link href="../pictures/favicon.ico" rel="icon" type="image/x-icon" />
	
	<style>
		table {
			margin-left: 50px;
		}
	
		table, th, td {
		  border: 1px solid black;
		  border-collapse: collapse;
		}
		
		table th {
			text-align: left;
		}
		
		table td {
			font-style: italic;
		}
	</style>
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
            <li><a href="#">Edzésterv</a></li>
            <li><a href="logout.php" >Kijelentkezés</a></li>
            <li class="current about"><a href="#" >Profil</a></li>
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
    <h2>Saját adatok</h2>
	
	<table>
		<tbody>
			<tr>
				<th>Felhasználónév</th>
				<td><?=$_SESSION["user"]["username"]?></td>
			</tr>
			<tr>
				<th>Email-cím</th>
				<td><?=$_SESSION["user"]["email"]?></td>
			</tr>
			<tr>
				<th>Regisztrálás ideje</th>
				<td><?=$_SESSION["user"]["date"]?></td>
			</tr>
		</tbody>
	</table>

</main>

<footer>
    <label id="running"><span>Ez egy táplálékkiegészítőket áruló webshop.
		Készítette: Kiss Csanád & Szirbik Péter</span>
    </label>
</footer>
</body>
</html>