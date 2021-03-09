<?php

session_start();
// print_r($_SESSION);

$username = "";
$email    = "";
$errors = array(); 

$db = new mysqli("localhost", "root", "");
$db ->query("SET NAMES utf8");
$db->select_db("asvanyborze");

if (isset($_POST['reg'])) {
  $username = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['pass']);
  $password2 = mysqli_real_escape_string($db, $_POST['pass_2']);
  $telephone = mysqli_real_escape_string($db, $_POST['tel']);
  if(isset($_POST['check'])){ $checkbox = mysqli_real_escape_string($db, $_POST['check']);}

  if (empty($username)) { array_push($errors, "Adja meg a nevét"); }
  if (empty($password)) { array_push($errors, "Adja meg a jelszavát"); }
  if (empty($email)) { array_push($errors, "Adja meg az email címét"); }
  if (empty($telephone)) { array_push($errors, "Adja meg a telefonszámát"); }
  if (empty($checkbox)) { array_push($errors, "Kötelező elfogadni a felhasználói feltételeket");}

  if($password != $password2) {array_push($errors, "A jelszavak nem egyeznek!");}


  $user_check_query = "SELECT * FROM felhasznalo WHERE Nev = '$username' OR Email = '$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "A felhasználónév már létezik");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Ez az email használatban van");
    }
  }

  if (count($errors) == 0) {
      $password = md5($password);
      
  	$query = "INSERT INTO felhasznalo (Nev, Jelszo, Email, Telefon ) 
  			  VALUES('$username', '$password', '$email' , '$telephone' )";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	 header('location: index.php');
  }
}




if (isset($_POST['belepes'])) {
  $username = mysqli_real_escape_string($db, $_POST['loginname']);
  $password = mysqli_real_escape_string($db, $_POST['loginpass']);
  $ip = $_SERVER['REMOTE_ADDR'];
  $statusz = "error";
  $ok = "OK";



  if (empty($username)) {
  	array_push($errors, "Felhasználónév szükséges!");
  }
  if (empty($password)) {
  	array_push($errors, "Jelszó szükséges!");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM felhasznalo WHERE Nev = '$username' AND Jelszo = '$password'";
  	$results = $db->query($query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;

      $row = $results->fetch_object();

      $_SESSION['userid'] = $row->ID;
      
      $sql = "INSERT INTO login (FelhasznaloID, Datum, Statusz, Komment, IP)
      VALUES( ".$row->ID." ,
      NOW() ,
      '".$ok."' ,
      '".$_POST['loginname']."' ,
      '".$ip."' )" ;
      $eredmeny = $db->query($sql);

  	}else {
  		array_push($errors, "Rossz felhasználónév/jelszó kombináció");


      $sql = "INSERT INTO login (FelhasznaloID, Datum, Statusz, Komment, IP)
      VALUES( -1 ,
      NOW() ,
      '".$statusz."' ,
      '".$_POST['loginname']."' ,
      '".$ip."' )" ;
      $eredmeny = $db->query($sql);

  	}
  }

}

?>
