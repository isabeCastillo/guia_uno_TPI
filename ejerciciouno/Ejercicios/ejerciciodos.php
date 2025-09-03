<?php
$solucion="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $R = $_POST["R"] ?? 0;
    $r = $_POST["r"] ?? 0;
    $altura = $_POST["altura"] ?? 0;
    if ($R > 0 && $r > 0 && $altura > 0) {
        $volumen = (1/3)* pi()* $altura * ($R * $R + $r * $r + $R*$r);
        $solucion = "El volumen del cono truncado es: " .round($volumen , 2);
    }else {
    $solucion = "Por favor ingrese valores mayor a 0";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio volumen cono</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="formulario">
        <form action="" method="post">
            <label for="">Ingrese el radio de la base mayor</label>
            <input type="number" name="R" id="">
            <label for="">Ingrese el radio de la base menor</label>
            <input type="number" name="r" id="">
            <label for="">Ingrese la altura</label>
            <input type="number" name="altura" id="">
            <button type="submit">Calcular</button>
        </form>
    </div>
    <div class="resultado">
        <p><?php echo $solucion;?></p>
    </div>
</body>
</html>