<?php 

include('server.php');
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/profil.css">
    <title>Profil</title>
</head>
<body>
<?php if (isset($_SESSION['username']))
{
?>

<header>
    <span>
        <?php
        echo "<a href='profil.php'><strong>".$_SESSION['username']."</strong></a>";
        ?>
        <a href='logout.php' style='color: red;'>Kilépés</a>

    </span>
    <h1>ÁsványBörze</h1> 
</header>


<div class=header>
    <h3>Adataid</h3>
</div>
<div class=form>
        <a href='termekek.php'><button class="btn">Vissza a főoldalra</button></a>
        <a href='uzenet.php'><button class="btn">Üzenetek</button></a>
        <a href='modosit.php'><button class="btn">Adatok módosítása</button></a>
        <a href='eladas.php'><button class="btn2">+ Új termék eladása</button></a><br>


        <h3>Eladó termékeid</h3>
    </div>
<?php
    } 
    if(!isset($_SESSION['username'])){

        header('location: logout.php');
    }

?> 


    



</body>
</html>