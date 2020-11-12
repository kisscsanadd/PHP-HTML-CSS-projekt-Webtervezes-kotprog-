<?php
session_start();
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>BMI kalkulátor</title>
	<link rel="stylesheet" type="text/css" href="../css/mainStyle.css" />
	<link rel="stylesheet" type="text/css" href="../css/bmiStyle.css" />
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
			<li class="productsWidth">
				<a href="#">Termékek</a>
				<ul class="productsWidth">
					<li><a href="protein.php">Fehérjék</a></li>
					<li><a href="vitamin.php">Vitaminok</a></li>
				</ul>
			</li>
			<li class="about"><a href="contact.php">Kapcsolat</a></li>
			<li class="current"><a href="#">BMI</a></li>
		</ul>
    </nav>
	
	<main>
		<h2>BMI kalkulátor</h2>
		<div class="flexbox">
			<div id="left">
				<form action="bmi.php" method="get">
						<div>
							<label for="height"><b>Magasság (cm)</b></label>
						</div>
						<input type="number" value="<?php if(isset($_GET['height'])) echo $_GET['height']; else echo "150"; ?>" max="299" id="height" name="height" required>
						
						<div class="gap">
							<label for="weight"><b>Testsúly (kg)</b></label>
						</div>
						<input type="number" value="<?php if(isset($_GET['weight'])) echo $_GET['weight']; else echo "50"; ?>" min="9" id="weight" name="weight" required> <br>
						<button type="submit" name="calculate" class="buttond">Kalkulálás</button>
				</form>
			</div>
			<div id="right">
				<table>
					<thead>
						<tr>
							<th class="valuation" id="valuationId"><b>Értékelés</b></th>
							<th class="value" id="valueId"><b>BMI érték</b></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td headers="valuationId" class="valuation">Sovány</td>
							<td headers="valueId" class="value">&lt; 18,5</td>
						</tr>
						<tr>
							<td headers="valuationId" class="valuation">Normális testsúly</td>
							<td headers="valueId" class="value">18,5 - 24,9</td>
						</tr>
						<tr>
							<td headers="valuationId" class="valuation">Túlsúlyos</td>
							<td headers="valueId" class="value">25 - 29,9</td>
						</tr>
						<tr>
							<td headers="valuationId" class="valuation">Elhízott</td>
							<td headers="valueId" class="value">30 - 34,9</td>
						</tr>
						<tr>
							<td headers="valuationId" class="valuation">Erősen elhízott</td>
							<td headers="valueId" class="value">> 35</td>
						</tr>
						<tr <?php 
								if(isset($_GET["calculate"])) {
									$height = $_GET["height"];
									$weight = $_GET["weight"];
									
									$m_height = $height / 100;
									
									$bmi = $weight / ($m_height * $m_height);
									$roundedBMI = (round($bmi, 1));
									
									echo "style=background-color:"; 
										if($roundedBMI < 18.5) {
											echo '#75dae5';
										} else if ($roundedBMI > 18.5 && $roundedBMI < 25) {
											echo '#92bc1e';
										} else if ($roundedBMI >= 25 && $roundedBMI < 30) {
											echo '#e0da09';
										} else if ($roundedBMI >= 30 && $roundedBMI < 35) {
											echo '#ec8e00';
										} else if ($roundedBMI >= 35) {
											echo '#de0612';
										}
								}
							?>>
							<td headers="valuationId" class="valuation">Te éréked</td>
							<td headers="valueId" class="value">
								<?php
									if(isset($_GET["calculate"])) {
										echo $roundedBMI;
									} else {
										echo '';
									}
								?>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div id="streak"></div>
			<div id="underWeight" class="size">
				<label class="leftValuation">Sovány</label>
				<label class="rightValue">&lt; 18,5</label>
			</div>
			<div id="normal" class="size marginLeft">
				<label class="leftValuation">Normális</label>
				<label class="rightValue">18,5 - 24,9</label>
			</div>
			<div id="overweight" class="size marginLeft">
				<label class="leftValuation">Túlsúlyos</label>
				<label class="rightValue">25 - 29,9</label>
			</div>
			<div id="obese" class="size marginLeft">
				<label class="leftValuation">Elhízott</label>
				<label class="rightValue">30 - 34,9</label>
			</div>
			<div id="clinicallyObese" class="size marginLeft">
				<label class="leftValuation">Erősen elhízott</label>
				<label class="rightValue">> 35</label>
			</div>
		 </div>
		 
		 <?php
		 
				
		 
		 ?>
	</main>

	<footer>
		<label id="running"><span>Ez egy táplálékkiegészítőket áruló webshop. 
		Készítette: Kiss Csanád & Szirbik Péter</span>
		</label>
	</footer>
</body>
</html>