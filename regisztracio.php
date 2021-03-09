<?php

include('server.php')
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/reg-log.css">
    <title>Regisztráció</title>
</head>
<body>


<div class="header">
    <h3>Regisztráció</h3>
</div>


<form class="form" method="post" action="regisztracio.php">

<?php include('hiba.php'); ?>

<div class=input-group>
<label>Felhasználónév:</label><br>
<input type="text" name="name" id="name" value="<?php echo $username; ?>"><br>
</div>


<div class=input-group>
<label>Jelszó:</label><br>
<input type="password" name="pass" id="pass" placeholder="Jelszó"><br>
</div>


<div class=input-group>
<label>Jelszó megerősítése:</label><br>
<input type="password" name="pass_2" id="pass_2" placeholder="Jelszó ismét"><br>
</div>


<div class=input-group>
<label>Email:</label><br>
<input type="email" name="email" id="email" value="<?php echo $email; ?>"><br>
</div>


<div class=input-group>
<label>Telefon:</label><br>
<input type="tel" name="tel" id="tel" placeholder="Minta: 06203344555"><br>
</div>

<div>
<input type="checkbox" name="check" id="check">
 <a href="feltetel.html">Felhasználói feltételek</a> elfogadása.</input><br>    


<button class="btn" type="submit" name="reg">Regisztrál</button>
</form>


<form action="index.php" style="float: right;">
<button type="submit" class="btn2">Mégse</button>    
</form>

</div>


</body>
</html>