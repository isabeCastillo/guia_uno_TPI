<?php
$resultado="";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $x1 = isset($_POST['x1']) ? floatval($_POST['x1']) : null;
    $y1 = isset($_POST['y1']) ? floatval($_POST['y1']) : null;
    $z1 = isset($_POST['z1']) ? floatval($_POST['z1']) : null;
    $x2 = isset($_POST['x2']) ? floatval($_POST['x2']) : null;
    $y2 = isset($_POST['y2']) ? floatval($_POST['y2']) : null;
    $z2 = isset($_POST['z2']) ? floatval($_POST['z2']) : null;
    if ($x1 === null || $y1 === null || $z1 === null || $x2 === null || $y2 === null || $z2 === null) {
        $resultado = "Ingrese todos los componetes!";
    } else {
        //ecuacion
        $dx = $x2 - $x1;
        $dy = $y2 - $y1;
        $dz = $z2 - $z1;

        $resultado = "La pendiente R3 es: ($dx, $dy, $dz)";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Calcular "pendiente" en R3</h1>
    <form action="" method="post">
        <label for="">Ingrese el valor de X1</label>
        <input type="number" name="x1" id="">
        <label for="">Ingrese el valor de Y1</label>
        <input type="number" name="y1" id="">
        <label for="">Ingrese el valor de Z1</label>
        <input type="number" name="z1" id="">
        <label for="">Ingrese el valor de X2</label>
        <input type="number" name="x2" id="">
        <label for="">Ingrese el valor de Y2</label>
        <input type="number" name="y2" id="">
        <label for="">Ingrese el valor de Z2</label>
        <input type="number" name="z2" id="">
        <button type="submit">Calculando</button>
    </form>
    <div class="resultado">
        <?= $resultado?>
    </div>
</body>
</html>