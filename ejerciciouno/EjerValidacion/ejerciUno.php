<?php
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST["nombre"]);
    $ciudad = trim($_POST["ciudad"]);
    $telefono = trim($_POST["telefono"]);
    $codigoPostal = trim($_POST["codigoPostal"]);

    if (preg_match('/[0-9]/', $nombre)) {
        $mensaje = "El campo  Nombre completo no puede contener numeros.";
    } elseif (preg_match('/[0-9]/', $ciudad)) {
        $mensaje = "El campo ciudad no puede contener numeros";
    } elseif (!ctype_digit($telefono)) {
        $mensaje = "El campo telefono no puede contener letras";
    } elseif (!ctype_digit($codigoPostal)) {
        $mensaje = "El campo codigo postal no puede contener letras";
    }else{
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
        <input type="text" name="telefono" id="" placeholder="Telefono">
        <input type="text" name="codigoPostal" id="" placeholder="Codigo postal">
        <button type="submit">Procesando datos</button>
    </form>

    <?php if ($mensaje): ?>
        <p class="<?= $mensaje === 'Datos correctos!' ? 'ok' : 'error' ?>">
            <?= $mensaje ?>
        </p>
    <?php endif; ?>
</body>
</html>