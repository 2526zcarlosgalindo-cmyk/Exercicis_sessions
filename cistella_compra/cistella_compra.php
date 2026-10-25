<?php
session_start();

if (isset($_POST['producte']) && isset($_POST['quantitat'])) {
    $producte = $_POST['producte'];
    $quantitat = $_POST['quantitat'];

    if (!isset($_SESSION[$producte])) {
        $_SESSION[$producte] = 0;
    }

    $_SESSION[$producte] = $_SESSION[$producte] + $quantitat;
}

header("Location: index.html");
exit();
?>