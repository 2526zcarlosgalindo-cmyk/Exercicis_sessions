<?php
session_start();

if (!isset($_SESSION['usuari'])) {
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Pàgina 1</title>
</head>
<body>
    <h3>Usuari connectat: <?php echo $_SESSION['usuari']; ?></h3>
    <hr>

    <h1>Benvingut a la Pàgina 1</h1>
    <p>ASIX 2A - Informàtica, desenvolupament d'aplicacions web</p>
    
    <a href="pagina2.php">Veure la informació de la Pàgina 2</a>
</body>
</html>