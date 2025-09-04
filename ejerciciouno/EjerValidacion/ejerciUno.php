<?php
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre       = trim($_POST["nombre"]);
    $ciudad       = trim($_POST["ciudad"]);
    $telefono     = trim($_POST["telefono"]);
    $codigoPostal = trim($_POST["codigoPostal"]);
    $provincia    = trim($_POST["provincia"]);

    if (empty($nombre) || empty($ciudad) || empty($telefono) || empty($codigoPostal) || empty($provincia)) {
        $mensaje = "Todos los campos son obligatorios.";
    } elseif (preg_match('/[0-9]/', $nombre)) {
        $mensaje = "El campo  Nombre completo no puede contener numeros.";
    } elseif (preg_match('/[0-9]/', $ciudad)) {
        $mensaje = "El campo ciudad no puede contener numeros";
    } elseif (!ctype_digit($telefono) || strlen($telefono) > 9) {
        $mensaje = "El campo telefono debe contener solo números y no más de 9 dígitos";
    } elseif (!ctype_digit($codigoPostal) || strlen($codigoPostal) !== 5) {
        $mensaje = "El campo codigo postal debe contener exactamente 5 números";
    } elseif (substr($provincia, 0, 2) !== substr($codigoPostal, 0, 2)) {
        $mensaje = "El código postal no coincide con el departamento seleccionado.";
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
        <input type="text" name="telefono" id="" placeholder="Telefono">
        <input type="text" name="codigoPostal" id="" placeholder="Codigo postal">
        <label for="provincia">Departamento de oriente</label>

        <select name="provincia" required>
            <option value="">Selecciona un Departamento</option>
            <option value="31-launion">31 - La Unión</option>
            <option value="32-morazan">32 - Morazán</option>
            <option value="33-sanmiguel">33 - San Miguel</option>
            <option value="34-usulutan">34 - Usulután</option>
        </select>

        <button type="submit">Procesando datos</button>
    </form>

    <?php if ($mensaje): ?>
        <p class="<?= $mensaje === 'Datos correctos!' ? 'ok' : 'error' ?>">
            <?= $mensaje ?>
        </p>
    <?php endif; ?>
</body>
</html>