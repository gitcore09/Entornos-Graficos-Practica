<?php
// Verificar si existe una cookie con el tipo de titular seleccionado
$select = isset($_COOKIE['tipo_titular']) ? $_COOKIE['tipo_titular'] : 'all';

$titulares = [
    'politica' => 'Noticia política: El parlamento aprueba nueva ley.',
    'economica' => 'Noticia económica: La bolsa alcanza un récord histórico.',
    'deportiva' => 'Noticia deportiva: El equipo local gana el campeonato.'
];

?>

<html>

    <head>
    </head>

    <body>

    <form action="set.php" method="post">
        <p>Seleccionar el tipo de titular de preferencia:</p>
        <label>
        <input type="radio" name="tipo_titular" value="politica" <?= $select === 'politica' ? 'checked' : '' ?>> Noticia Política
        </label><br>
        <label>
        <input type="radio" name="tipo_titular" value="economica" <?= $select === 'economica' ? 'checked' : '' ?>> Noticia Económica
        </label><br>
        <label>
        <input type="radio" name="tipo_titular" value="deportiva" <?= $select === 'deportiva' ? 'checked' : '' ?>> Noticia Deportiva
        </label><br>
        <button type="submit">Guardar Preferencia</button>
    </form>

    <h2>Titulares</h2>

    <?php if ($select === 'all'): ?>
        <ul>
        <?php foreach ($titulares as $titular): ?>
        <li><?= $titular ?></li>
        <?php endforeach; ?>
        </ul>
    <?php else: ?>
    <p><?= $titulares[$select] ?></p>
    <?php endif; ?>

    <a href="clearcookies.php">Borrar Preferencia</a>
</body>
</html>