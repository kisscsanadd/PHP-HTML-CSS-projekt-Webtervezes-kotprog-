<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Edzésterv</title>
    <link rel="stylesheet" type="text/css" href="../css/mainStyle.css" />
    <link rel="stylesheet" type="text/css" href="../css/workoutStyle.css" />
    <link rel="stylesheet" type="text/css" href="../css/printStyle.css" />
    <link href="../pictures/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body>

<header>
	<video autoplay muted loop>
	  <source src="../pictures/homeWorkout.mp4" type="video/mp4">
	</video>
</header>

<nav class="nav">
    <ul>
        <li><a href="main.php">Főoldal</a></li>
        <li><a href="registration.php">Regisztráció</a></li>
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
        <li class="current"><a href="#">Edzésterv</a></li>
    </ul>
</nav>

<main>
    <h2>Edzésterv</h2>

    <label> Személyre szabott edzéstervvel segítünk a céljaid elérésében. Adj meg néhány alapvető adatot,</label>
    és hamarosan küldjük e-mailben a csapatunk által összeállított edzéstervet, és táplálkozási tanácsokat.

    <form action="mailto:admin@admin.hu" method="post" enctype="text/plain">
        <label class="required" for="username"><b>Név</b></label>
        <input type="text" placeholder="Add meg a neved" id="username" required>

        <label class="required" for="email"><b>Email-cím</b></label>
        <input type="email" placeholder="Add meg az email címedet" id="email" required>

        <label class="required" for="goal"><b>Mi a célod az edzéssel?</b></label> <br>

        <select id="goal" name="goals" size="2">
			<option value="tomegeles">Tömegnövelés</option>
			<option value="fogyas">Fogyás</option>
        </select><br>
		
        <label class="required"><b>Mennyi időd van hetente edzésre?</b></label><br>
		
        <input type="radio" id="3h" name="time">
        <label for="3h">Nagyjából 3 óra</label>
		
        <input type="radio" id="5h" name="time">
        <label for="5h">Nagyjából 5 óra</label>
		
        <input type="radio" id="7h" name="time">
        <label for="7h">Nagyjából 7 óra</label><br>
		
		<label for="img"><b>Előtte kép<b></label><br>
		<input type="file" id="img" name="img" accept="image/*"><br>
		
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