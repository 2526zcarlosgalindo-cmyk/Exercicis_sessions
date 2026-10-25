<?php
session_start();

$quantitat_samarreta = 0;
$quantitat_pantalons = 0;

if (isset($_SESSION['samarreta'])) {
    $quantitat_samarreta = $_SESSION['samarreta'];
}

if (isset($_SESSION['pantalons'])) {
    $quantitat_pantalons = $_SESSION['pantalons'];
}

$preu_samarreta = 10;
$preu_pantalons = 20;

$total_samarretes = $quantitat_samarreta * $preu_samarreta;
$total_pantalons = $quantitat_pantalons * $preu_pantalons;

$total_compra = $total_samarretes + $total_pantalons;
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Resum de la compra</title>
</head>
<body>
    <h1>Resum de la teva compra</h1>
    
    <ul>
        <li>Samarretes: <?php echo $quantitat_samarreta; ?> x <?php echo $preu_samarreta; ?>€ = <?php echo $total_samarretes; ?>€</li>
        <li>Pantalons: <?php echo $quantitat_pantalons; ?> x <?php echo $preu_pantalons; ?>€ = <?php echo $total_pantalons; ?>€</li>
    </ul>
    
    <h2>Total a pagar: <?php echo $total_compra; ?>€</h2>
    
    <a href="confir.php">
        <button type="button">Confirmar compra</button>
    </a>
    
    <br><br>
    <a href="index.html">Tornar a la botiga</a>
</body>
</html>