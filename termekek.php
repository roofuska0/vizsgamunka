<?php
include('server.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/termekek.css">
    <title>Termék lista</title>
</head>
<body>
<header>
    <span>
<?php if (isset($_SESSION['username']))
    {
        echo "<a href='profil.php'><strong>".$_SESSION['username']."</strong></a>";
        echo "<a href='logout.php' style='color: red;'>Kilépés</a>";
        echo "<a href='profil.php'><button class='btn2' style='margin-right: -10px;'>Hirdetés feladása</button></a>";
    } 
    else {        
        echo "<form action='termekek.php' method='post'>";
        echo "<input type='hidden' name='belep'/>";
        echo "<input type='submit' value='Bejelentkezés' class='btn'/>";
        echo "</form>";
    } ?> 
    </span>
    <h1>ÁsványBörze</h1> 
    <h2>Ásványok az ország egész területéről</h2>
    <?php    
    if (isset($_POST['belep']) || $errors)
    {
    ?>        
    <div class="header">
    <h3>Belépés</h3>
    </div>


    <form class="form" method="post" action="termekek.php">
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


    <form style="float: right;" action="termekek.php">
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
</header>
    
</body>
</html>