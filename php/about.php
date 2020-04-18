<!DOCTYPE html>
<html  lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Rólunk</title>
	<link rel="stylesheet" type="text/css" href="../css/mainStyle.css" />
	<link rel="stylesheet" type="text/css" href="../css/aboutStyle.css" />
	<link rel="stylesheet" type="text/css" href="../css/printStyle.css" />
	<link href="../pictures/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body>
    <header>
	</header>
	
    <nav class="nav">
        <ul>
			<li><a href="main.php">Főoldal</a></li>
			<li><a href="registration.php">Regisztráció</a></li>
			<li><a href="login.php">Bejelentkezés</a></li>
			<li class="about current"><a href="#">Rólunk</a></li>
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
		<h2>Rólunk</h2>

		<table id="aboutUs" class="tableMargin">
			<thead>
			<tr>
				<th id="uzem">Üzemeltetők</th>
				<th id="email">Email cím</th>
				<th id="jobrole">Munkakör</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td headers="uzem">Kiss Csanád</td>
				<td headers="email">edzesweboldal@gmail.com</td>
				<td headers="jobrole">Táplálékszakértő</td>
			</tr>
			<tr>
				<td headers="uzem">Szirbik Péter</td>
				<td headers="email">edzesweboldal@gmail.com</td>
				<td headers="jobrole">Edző</td>
			</tr>
			</tbody>
		</table>

		<h3>Célunk</h3>

		<table class="tableMargin">
			<tbody>
			<tr>
				<td> Egy fitt és egészséges közösség létrehozása, amiben ezek a termékek csak segíteni tudnak. <br>
					Nem titkolt célunk, hogy minden korosztályhoz eljutassuk a mozgásból fakadó örömet. <br>
					Nagy szerettel fogadunk mindenkit, aki felveszi velünk a kapcsolatot a megadott email címeken, illetve, ha vásárol termékeinkből. <br>
					Hatalmas segítség ez számunkra.</td>
				<td><img src="../pictures/team.jpg" alt="team"></td>
			</tr>
			</tbody>
		</table>

		<h3>Irányelveink</h3>
		<table>
			<tbody>
			<tr>
				<td>Eddz keményebben, mint legutóbb, és fittebb leszel, mint voltál.
					<br/>
					(Bear Grylls)</td>
				<td>
					<div class="desciption"><b>Bear Grylls</b><br>
						1974 - <br>
						Kalandor, felfedező, műsorvezető, motivációs szónok
					</div>
					<img src="../pictures/bearGrylls.jpg" alt="Bear Grylls" class="citationImg">
				</td>
			</tr>
			<tr>
				<td>A lelkesedés diktálja az iramot, de a kitartás éri el a célt.
					<br/>
					(Dan Millman)</td>
				<td>
					<div class="desciption"><b>Dan Millman</b><br>
						1946 - <br>
						Amerikai író, előadó
					</div>
					<img src="../pictures/danMillman.jpg" alt="Dan Millman" class="citationImg">
				</td>
			</tr>
			<tr>
				<td>A pillanat amikor feladod, az a pillanat amikor valaki mást hagysz nyerni.
					<br/>
					(Kobe Bryant)</td>
				<td>
					<div class="desciption"><b>Kobe Bryant</b><br>
						1978 - 2020<br>
						Amerikai profi kosárlabdázó
					</div>
					<img src="../pictures/kobeBryant.jpg" alt="Kobe Bryant" class="citationImg">
				</td>
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