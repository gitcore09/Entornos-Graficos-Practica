<?php
session_start();

if (isset($_SESSION['contador'])) {
    $_SESSION['contador']++;
} else {
    $_SESSION['contador'] = 1;
}
echo "Número de páginas visitadas en esta sesión: " . $_SESSION['contador'];
?>