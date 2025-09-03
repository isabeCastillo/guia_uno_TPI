<?php
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST["nombre"]);
    $ciudad = trim($_POST["ciudad"]);
    if (preg_match('/[0-9]/', $nombre)) {
        $mensaje = "El campo  Nombre completo no puede contener numeros.";
    } elseif (preg_match('/[0-9]/', $ciudad)) {
        $mensaje = "El campo ciudad no puede contener numeros";
    } else{
        $mensaje = "Datos correctos!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nombre" id="" placeholder="Nombre completo">
        <input type="text" name="ciudad" id="" placeholder="Ciudad">
        <button type="submit">Procesando datos</button>
    </form>

    <?php if ($mensaje): ?>
        <p class="<?= strpos($mensaje, '❌') !== false ? 'error' : 'ok' ?>">
            <?= $mensaje ?>
        </p>
    <?php endif; ?>
</body>
</html>