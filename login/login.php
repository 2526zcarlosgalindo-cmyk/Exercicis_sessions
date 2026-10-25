<?php
session_start();
if (isset($_POST['usuari']) && isset($_POST['pwd'])){
 $usuari=$_POST['usuari'];
 $pwd=$_POST['pwd'];
  if ($usuari===$pwd && $pwd !== ""){
    $_SESSION['usuari']=$usuari;
    header("location: pagina1.php");
    exit();
  }
  else {
    header("location: index.html");
    exit();
  }
 
} else {
  header("location: index.html");
  exit(); 
}
?>