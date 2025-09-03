<?php
$resultado="";
$pasos="";
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
        $dx = $x1 - $x2;
        $dy = $y1 - $y2;
        $dz = $z1 - $z2;

        //cuadrado
        $dx2 = $dx * $dx;
        $dy2 = $dy * $dy;
        $dz2 = $dz * $dz;

        //suma de cuadrados
        $suma = $dx2 + $dy2 + $dz2;

        //sacando distancia con la raiz
        $distancia = sqrt($suma);

        $dist = round($distancia, 2);
        $resultado = "La distancia entre P₁ y P₂ es: {$dist}";
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
    <h1>Calcular distancia entre dos puntos en R³</h1>
    <p>Ingresa las coordenadas de P₁(x₁,y₁,z₁) y P₂(x₂,y₂,z₂)</p>
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