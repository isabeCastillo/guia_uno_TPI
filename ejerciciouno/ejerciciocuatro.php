<?php
$solucion = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $volumen = $_POST["volumen"] ?? 0;
    $radio = $_POST["radio"] ?? 0;
    $grosor = $_POST["grosor"] ??0;
    if ($volumen > 0 && $radio > 0) {
        $radio_efectivo = $radio -$grosor;
        if ($radio_efectivo <=0) {
            $solucion = "El grosor es mayor o igual que el radio, no es posible.";
        }else {
            $altura = $volumen / (pi() * pow($radio_efectivo, 2));
            $altura = round($altura, 2);
            $solucion = "La altura de la piscina es: $altura metros";
        }
    }else {
        $solucion = "Por favor ingresa todos los valores correctamente";
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
    <form action="" method="post">
        <label for="">Ingrese el volumen de la piscina</label>
        <input type="number" name="volumen" id="">
        <label for="">Ingrese radio de la base</label>
        <input type="number" name="radio" id="">
        <label for="">Grosor de la piscina</label>
        <input type="number" name="grosor" required step="any" value="0.025" id="">
        <button type="submit">Calcular</button>
    </form>
    <div class="resultado">
        <?= $solucion?>
    </div>
</body>
</html>