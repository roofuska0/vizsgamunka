<?php 
include('server.php');

?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/reg-log.css">
    <link rel="stylesheet" type="text/css" href="css/nyitolap.css">
    <title>Nyitó oldal</title>
</head>
<body>        
    <div class="felugro">
 


    <?php    
    if (isset($_POST['belep']) || $errors)
    {
    ?>        
    <div class="header">
    <h3>Belépés</h3>
    </div>


    <form class="form" method="post" action="index.php">
       <?php include('hiba.php'); ?> 
    <div class=input-group>
    <label>Felhasználónév:</label><br>
    <input type="text" name="loginname" id="loginname"><br>
    </div>

    <div class=input-group>
    <label>Jelszó:</label><br>
    <input type="password" name="loginpass" id="loginpass'" placeholder="Jelszó"><br>
    

    <button type="submit" class="btn" name="belepes">Belépés</button>
    </form>


    <form style="float: right;" action="index.php">
    <button type="submit" class="btn2">Mégse</button>   
    </form>

    </div>

    <form class='form' action='regisztracio.php'>
    <p>Még nem vagy regisztrálva?</p>
    <input type='submit' class='btn' value='Katt'/>
    </form>
    <?php
    }
    ?>
    </div>

<header>
    <span>
<?php if (isset($_SESSION['username']))
    {
        echo "<a href='profil.php'><strong>".$_SESSION['username']."</strong></a>";
        echo "<a href='logout.php' style='color: red;'>Kilépés</a>";
        echo "<a href='profil.php'><button class='btn2' style='margin-right: -10px;'>Hirdetés feladása</button></a>";
    } 
    else {        
        echo "<form action='index.php' method='post'>";
        echo "<input type='hidden' name='belep'/>";
        echo "<input type='submit' value='Bejelentkezés' class='btn'/>";
        echo "</form>";
    } ?> 
    </span>
    <h1>ÁsványBörze</h1> 
    <h2 style="color: #e0793d;">Ásványok az ország egész területéről</h2>
</header>

<div>
    <h3>Termék keresése</h3>
</div>

<form class="form2" method="post" action="termekek.php">
<div class=input-group>
<input type="text" name="srctxt" id="srctxt">
</div>
<input class="btn" type="submit" name="srcsub" id="srcsub" value="Keresés">
    <a href="termekek.php"><button class="btn2">Összes termék >></button></a>
</form>

</div>


</body>
</html>