<?php
include('server.php');
include('sell.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/profil.css">
    <title>Tárgy eladása</title>
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
    <h3>Tárgy feltöltése</h3>

</div>

<form class="form" method="POST" action="eladas.php" enctype="multipart/form-data"> 
    <?php include('hiba.php');    ?>        
    <div class=data-group>
        <label>Termék neve</label> 
        <input type="text" name="termeknev" id="termeknev" required/><br> 
        <label>Ár</label> 
        <input type="number" name="ar" id="ar" required/>
    </div>

        <p>Határozza meg, hogy a termék fix árral szeretné hírdetni,<br> vagy inkább licitálásra bocsátaná.</p> 
        <input type="radio" name="arak" id="fix" value="fix">
        <label for="fix">Fix ár</label><br>
        <input type="radio" name="arak" id="licit" value="licit">
        <label for="licit">Licitálásra bocsát</label><br>  

    <div class=data-group>
<?php



         echo "<label>Ásvány típusa</label> ";
         $asvanysql = "SELECT * FROM AsvanyTipus";
         $asvanyeredmeny = $db->query($asvanysql);

         echo "<select name='asvany' id='asvany'>";
         while($asvanysor = $asvanyeredmeny->fetch_object()){
         echo "<option value=$asvanysor->ID>$asvanysor->AsvanyNev</option>";}
         echo "</select> "; 
         
         

         echo "<label>Tárgy tapusa</label> ";
         $targysql = "SELECT * FROM Tipus";
         $targyeredmeny = $db->query($targysql); 

         echo "<select name='targyt' id='targyt'>";
         while($targysor = $targyeredmeny->fetch_object()){         
         echo "<option value=$targysor->ID>$targysor->Megnevezes</option>";}
         echo "</select>";

?>
        <label>Helyszín</label>
        <select name="megye" id="megye" >
           
        </select>
        <select name="telepules" id="telepules">
   
        </select>
        <script src="js/app.js"></script>


         <label>Rövid leírás a tárgyról</label> 
         <input type="text" name="leiras" id="leiras" style="width: max; height: 150px;"/> 


</div>

<!--képek-->
    
        <div class=data-group>          
         <label>Borítókép</label>
         <input type="file" name="file" id="file"/>
         <label>További képek</label>  
         <input type="file" name="file1" id="file1"/>
         <input type="file" name="file2" id="file2"/>
         <input type="file" name="file3" id="file3"/>
         <input type="file" name="file4" id="file4"/>
         </div>

        <div>
         <input type="submit" class="btn" name="elad" id="elad" value="Feltölt"/>
        </form>

        <form action="profil.php" style="float: right;">
        <button type="submit" class="btn2" >Mégse</button>
        </form>
        </div>










<?php
    } 
    if(!isset($_SESSION['username'])){

        header('location: logout.php');
    }

            ?> 
</body>
</html>