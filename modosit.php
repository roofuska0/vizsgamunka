<?php
include('server.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/profil.css">
    <title>Adat módosítás</title>
</head>
<body>
    <header>
        <span>
<?php if (isset($_SESSION['username']))
{

        echo "<a href='profil.php'><strong>".$_SESSION['username']."</strong></a>";
        
        echo "<a href='logout.php' style='color: red;'>Kilépés</a>";
        
} 
?>
    </span>
    <h1>ÁsványBörze</h1> 
</header>
<div class=header>
    <h3>Adatok módosítása</h3>
</div>
<div>
    <div class="data-group">
        <form class="form">

        
        
        </div>  
        <div>
         <input type="submit" class="btn" name="modosit" id="modosit" value="Módosít"/>
        </form>



<form action="profil.php" style="float: right;">
    <button type="submit" class="btn2" >Mégse</button>
</form>
 
</div>
<?php
    if(!isset($_SESSION['username'])){

        header('location: logout.php');
    }

?> 
    
</body>
</html>