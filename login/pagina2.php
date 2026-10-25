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
    <title>Informació - Pàgina 2</title>
</head>
<body>
    <h3>Usuari connectat: <?php echo $_SESSION['usuari']; ?></h3>
    <hr>
    
    <h1>Benvinguts a la Pàgina 2</h1>
    <p>Com que la sessió segueix activa, pots navegar entre les pàgines sense haver de tornar a posar la contrasenya.</p>
    
    <a href="pagina1.php">Tornar a la pàgina 1</a>
</body>
</html>