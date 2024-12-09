<?php
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selected_theme = $_POST['theme'] ?? 'default.css';
    setcookie('selected_theme', $selected_theme, time() + (86400 * 30), "/"); 
    header("Location: index.php");
    exit;
}

$current_theme = $_COOKIE['selected_theme'] ?? 'default.css';
?>

<html>
    <head>
    </head>
    <body>
    <h1>Configura el estilo de la página</h1>
    <form method="POST" action="">
    <label for="theme">Selecciona un estilo:</label>
    <select id="theme" name="theme">
        <option value="default.css" <?php echo $current_theme === 'styledefault.css' ? 'selected' : ''; ?>>Por defecto</option>
        <option value="light.css" <?php echo $current_theme === 'stylelight.css' ? 'selected' : ''; ?>>Tema Claro</option>
        <option value="dark.css" <?php echo $current_theme === 'styledark.css' ? 'selected' : ''; ?>>Tema Oscuro</option>
    </select>
    <button type="submit">Aplicar</button>
    </form>
    </body>
</html>