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
        <?php if(!isset($_SESSION["user"]) || empty($_SESSION["user"])):?>
            <li><a href="registration.php">Regisztráció</a></li>
            <li><a href="login.php">Bejelentkezés</a></li>
        <?php else: ?>
            <li class="current"><a href="#">Edzésterv</a></li>
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
    <h2>Edzésterv</h2>

    <label> Személyre szabott edzéstervvel segítünk a céljaid elérésében. Adj meg néhány alapvető adatot,
    és hamarosan küldjük e-mailben a csapatunk által összeállított edzéstervet, és táplálkozási tanácsokat.<br><br></label>
    <?php
    if (isset($_POST["submit"])) {
        $username = $_SESSION["user"]["username"];
        $goal = $_POST["goal"];
        $time = $_POST["time"];
        echo "Kedves " .$username . ", a következő heti edzéstervet álltottuk össze neked:";
        echo "<br>";
        if($goal === "loss"){
            for ($i = 1; $i <= $time; $i++) {
                if($i%2){
                    echo $i . ". nap: 45 perc kocogás ";
                }else{
                    echo $i . ". nap: 20 perc intenzÍv futás ";
                }
                echo "<br>";
            }
        }
        if($goal === "gain"){
            for ($i = 1; $i <= $time; $i++) {
                if($i%2){
                    echo $i . ". nap: 45 perc mell, váll, tricepsz edzés súlyzóval";
                }else{
                    echo $i . ". nap: 45 perc kar, hát edzés súlyzóval";
                }
                echo "<br>";
            }
        }
        if($goal === "basic"){
            for ($i = 1; $i <= $time; $i++) {
                if($i%2){
                    echo $i . ". nap: 45 perc úszás ";
                }else{
                    echo $i . ". nap: 30 perc futás ";
                }
                echo "<br>";
            }
        }

        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                echo "A fájl nem kép.";
                $uploadOk = 0;
            }
        }
		
        if (file_exists($target_file)) {
            echo "A képet már feltötötték.";
            $uploadOk = 0;
        }
		
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Túl nagy a kép mérete.";
            $uploadOk = 0;
        }
		
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Csak JPG, JPEG, PNG & GIF fájlok engedélyezettek.";
            $uploadOk = 0;
        }
		
        if ($uploadOk == 0) {
            echo "Sajnáljuk, a feltöltés nem sikerült.";
			
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "A ". basename( $_FILES["fileToUpload"]["name"]). " képet sikeresen feltöltötted.";
                echo "<br>";
                echo "Várjuk visszajelzést és a képet az edzés sikerességéről, és sok hajrá!";
            } else {
                echo "Sajnáljuk, feltöltés közben hiba történt.";
            }
        }


    } else
    { ?>
        <form action="workout.php" method="post" enctype="multipart/form-data">
            <label class="required" for="goal"><b>Mi a célod az edzéssel?</b></label> <br>

            <select id="goal" name="goal" size="3">
                <option value="gain">Tömegnövelés</option>
                <option value="loss">Fogyás</option>
                <option value="basic">Egészség fenntartása</option>
            </select><br>

            <label class="required"><b>Mennyi időd van hetente edzésre?</b></label><br>

            <input type="radio" id="3h" name="time" value="3">
            <label for="3h">Max 3 nap</label>

            <input type="radio" id="5h" name="time" value="5">
            <label for="5h">Max 5 nap</label><br>

            <label for="img"><b>Előtte kép<b></label><br>
            <input type="file" name="fileToUpload" id="fileToUpload">

            <button type="submit" name="submit">Küldés</button>
        </form>
    <?php } ?>

</main>

<footer>
    <label id="running"><span>Ez egy táplálékkiegészítőket áruló webshop.
		Készítette: Kiss Csanád & Szirbik Péter</span>
    </label>
</footer>
</body>
</html>