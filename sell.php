<?php




$db = new mysqli("localhost", "root", "");
$db ->query("SET NAMES utf8");
$db->select_db("asvanyborze");




$errors = array(); 
$target_dir = "";
$target_file = "";
$target_file1 = "";
$target_file2 = "";
$target_file3 = "";
$target_file4 = "";



if(isset($_POST["elad"])) {

$uploadOk = 1;



if(!empty($_FILES["file"]["name"])){
  $target_dir = "img/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $check = getimagesize($_FILES["file"]["tmp_name"]);

  if($check !== false) {
    $uploadOk = 1;
  } else { array_push($errors, "Hiba. Ez a fájl (". htmlspecialchars( basename( $_FILES["file"]["name"])). ") nem képfájl.");
    $uploadOk = 0;  
    $target_dir = "";
    $target_file = "";
  }

  if ($_FILES["file"]["size"] > 500000) { array_push($errors, "Hiba. Túl nagy méretű fájl.");
    $uploadOk = 0;
    $target_dir = "";
    $target_file = "";

  }

  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
   && $imageFileType != "gif" ) { array_push($errors, "Csak JPG, JPEG, PNG és GIF kiterjesztésű fájl tölthető fel.");
   $uploadOk = 0;
   $target_dir = "";
   $target_file = "";
   }

   if ($uploadOk == 0) { array_push($errors, "Hiba. A fájl nem került feltöltésre.");

    $target_dir = "";
    $target_file = "";
   } else {
   if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
   } else {
     array_push($errors, "Hiba történt a fájl feltöltésekor.");
     $target_dir = "";
     $target_file = "";
   }
   }

  }else{

    $target_dir = "img/";
    $target_file = $target_dir . basename("DEFAULT.jpg");
  }




  if(!empty($_FILES["file1"]["name"])){
    $target_dir = "img/";
    $target_file1 = $target_dir . basename($_FILES["file1"]["name"]);
  
    $imageFileType = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["file1"]["tmp_name"]);
  
    if($check !== false) {
      $uploadOk = 1;
    } else { array_push($errors, "Hiba. Ez a fájl (". htmlspecialchars( basename( $_FILES["file1"]["name"])). ") nem képfájl.");
      $uploadOk = 0;  
      $target_dir = "";
      $target_file1 = "";
    }
  
    if ($_FILES["file1"]["size"] > 500000) { array_push($errors, "Hiba. Túl nagy méretű fájl.");
      $uploadOk = 0;
      $target_dir = "";
      $target_file1 = "";
  
    }
  
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
     && $imageFileType != "gif" ) { array_push($errors, "Csak JPG, JPEG, PNG és GIF kiterjesztésű fájl tölthető fel.");
     $uploadOk = 0;
     $target_dir = "";
     $target_file1 = "";
     }
  
     if ($uploadOk == 0) { array_push($errors, "Hiba. A fájl nem került feltöltésre.");
  
      $target_dir = "";
      $target_file1 = "";
     } else {
     if (move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file1)) {
     } else {
       array_push($errors, "Hiba történt a fájl feltöltésekor.");
       $target_dir = "";
       $target_file1 = "";
     }
     }
  
    }else{  
      $target_dir = "img/";
      $target_file1 = $target_dir . basename("DEFAULT.jpg");
    }





    if(!empty($_FILES["file2"]["name"])){
      $target_dir = "img/";
      $target_file2 = $target_dir . basename($_FILES["file2"]["name"]);
    
      $imageFileType = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
      $check = getimagesize($_FILES["file2"]["tmp_name"]);
    
      if($check !== false) {
        $uploadOk = 1;
      } else { array_push($errors, "Hiba. Ez a fájl (". htmlspecialchars( basename( $_FILES["file2"]["name"])). ") nem képfájl.");
        $uploadOk = 0;  
        $target_dir = "";
        $target_file2 = "";
      }
    
      if ($_FILES["file2"]["size"] > 500000) { array_push($errors, "Hiba. Túl nagy méretű fájl.");
        $uploadOk = 0;
        $target_dir = "";
        $target_file2 = "";
    
      }
    
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
       && $imageFileType != "gif" ) { array_push($errors, "Csak JPG, JPEG, PNG és GIF kiterjesztésű fájl tölthető fel.");
       $uploadOk = 0;
       $target_dir = "";
       $target_file2 = "";
       }
    
       if ($uploadOk == 0) { array_push($errors, "Hiba. A fájl nem került feltöltésre.");
    
        $target_dir = "";
        $target_file2 = "";
       } else {
       if (move_uploaded_file($_FILES["file2"]["tmp_name"], $target_file2)) {
       } else {
         array_push($errors, "Hiba történt a fájl feltöltésekor.");
         $target_dir = "";
         $target_file2 = "";
       }
       }
    
      }else{  
        $target_dir = "img/";
        $target_file2 = $target_dir . basename("DEFAULT.jpg");
      }




      if(!empty($_FILES["file3"]["name"])){
        $target_dir = "img/";
        $target_file3 = $target_dir . basename($_FILES["file3"]["name"]);
      
        $imageFileType = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["file3"]["tmp_name"]);
      
        if($check !== false) {
          $uploadOk = 1;
        } else { array_push($errors, "Hiba. Ez a fájl (". htmlspecialchars( basename( $_FILES["file3"]["name"])). ") nem képfájl.");
          $uploadOk = 0;  
          $target_dir = "";
          $target_file3 = "";
        }
      
        if ($_FILES["file3"]["size"] > 500000) { array_push($errors, "Hiba. Túl nagy méretű fájl.");
          $uploadOk = 0;
          $target_dir = "";
          $target_file3 = "";
      
        }
      
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
         && $imageFileType != "gif" ) { array_push($errors, "Csak JPG, JPEG, PNG és GIF kiterjesztésű fájl tölthető fel.");
         $uploadOk = 0;
         $target_dir = "";
         $target_file3 = "";
         }
      
         if ($uploadOk == 0) { array_push($errors, "Hiba. A fájl nem került feltöltésre.");
      
          $target_dir = "";
          $target_file3 = "";
         } else {
         if (move_uploaded_file($_FILES["file3"]["tmp_name"], $target_file3)) {
         } else {
           array_push($errors, "Hiba történt a fájl feltöltésekor.");
           $target_dir = "";
           $target_file3 = "";
         }
         }
      
        }else{  
          $target_dir = "img/";
          $target_file3 = $target_dir . basename("DEFAULT.jpg");
        }





        if(!empty($_FILES["file4"]["name"])){
          $target_dir = "img/";
          $target_file4 = $target_dir . basename($_FILES["file4"]["name"]);
        
          $imageFileType = strtolower(pathinfo($target_file4,PATHINFO_EXTENSION));
          $check = getimagesize($_FILES["file4"]["tmp_name"]);
        
          if($check !== false) {
            $uploadOk = 1;
          } else { array_push($errors, "Hiba. Ez a fájl (". htmlspecialchars( basename( $_FILES["file4"]["name"])). ") nem képfájl.");
            $uploadOk = 0;  
            $target_dir = "";
            $target_file4 = "";
          }
        
          if ($_FILES["file4"]["size"] > 500000) { array_push($errors, "Hiba. Túl nagy méretű fájl.");
            $uploadOk = 0;
            $target_dir = "";
            $target_file4 = "";
        
          }
        
          if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
           && $imageFileType != "gif" ) { array_push($errors, "Csak JPG, JPEG, PNG és GIF kiterjesztésű fájl tölthető fel.");
           $uploadOk = 0;
           $target_dir = "";
           $target_file4 = "";
           }
        
           if ($uploadOk == 0) { array_push($errors, "Hiba. A fájl nem került feltöltésre.");
        
            $target_dir = "";
            $target_file4 = "";
           } else {
           if (move_uploaded_file($_FILES["file4"]["tmp_name"], $target_file4)) {
           } else {
             array_push($errors, "Hiba történt a fájl feltöltésekor.");
             $target_dir = "";
             $target_file4 = "";
           }
           }
        
          }else{  
            $target_dir = "img/";
            $target_file4 = $target_dir . basename("DEFAULT.jpg");
          }
//-----------------------------------------------------------------------------------------------------------------


if(!empty($target_file) 
&& !empty($target_file1) 
&& !empty($target_file2) 
&& !empty($target_file3) 
&& !empty($target_file4) 
&& !empty($target_dir)){
  $imgsql = "INSERT INTO kep (Mappa, File, File1, File2, File3, File4)
  VALUES (
    '".$target_dir."',
     '".$target_file."',
     '".$target_file1."',
     '".$target_file2."',
     '".$target_file3."',
     '".$target_file4."')";
  $imgresult = $db->query($imgsql);
  //------------------------------------------------------------------------------------------------------



    //--------------------------------------------------------------------------------------------------

$termeknev = mysqli_real_escape_string($db, $_POST["termeknev"]);
$ar = mysqli_real_escape_string($db, $_POST["ar"]); 
$asvany = mysqli_real_escape_string($db, $_POST["asvany"]); 
$tipus = mysqli_real_escape_string($db, $_POST["targyt"]); 
$hely = mysqli_real_escape_string($db, $_POST["telepules"]); 
$leiras = mysqli_real_escape_string($db, $_POST["leiras"]); 
$kepid = -1;
$userid = "";






// $licitsql = "INSERT INTO licitalas (ID, VasarloID, AktualAr, LicitalasiIdo, LezarasIdo)
// VALUES (-1,
// NULL,
// NULL,
// NULL,
// NULL,
// )";








 $termeksql = "INSERT INTO `termek` (`TermekNev` , `EladoID` , `Artipus` , `Ar` , `Tipus` , `Asvany` , `Helyszin` , `Leiras`, `Kep` , `Torles`)
 VALUES (
 '".$termeknev."',
 '".$_SESSION['userid']."',
 -1,
 '".$ar."',
 '".$tipus."',
 '".$asvany."',
 '".$hely."',
 '".$leiras."',
 -1,
 NULL
 )";
 $termékresult = $db->query($termeksql);







} //kép értékeit befejező kapocs 



} //isset elad befejező kapocs



  


?>