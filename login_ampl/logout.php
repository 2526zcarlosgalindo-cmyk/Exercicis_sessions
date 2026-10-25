<?php
session_start();
session_destroy(); // Esto borra todas las variables de sesión
header("Location: index.html");
exit();
?>