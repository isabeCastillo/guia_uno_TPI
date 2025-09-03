<?php
$respuesta_1 ="";
$respuestaFinal = "";
$capital = "93504";
$ganancia = "0.323";

$ganancia_anual = $capital * $ganancia;
$ganacia_mensual = $ganancia_anual/12;
$ganancia_diaria = $ganacia_mensual/30;

//ganancia en 7 meses
$ganancia_7meses = $ganacia_mensual * 7;
$respuesta_1 = "La ganancia en 7 meses es: $" . number_format($ganancia_7meses, 2);

//ganancia de 8 años, 2 meses y 7 dias
$total_meses = (8 * 12) + 2;
$ganancia_meses = $ganacia_mensual * $total_meses;
$ganancia_dias = $ganancia_diaria * 7;
$ganancia_total = $ganancia_meses + $ganancia_dias;
$respuestaFinal = "La ganancia en 8 años, 2 meses y 7 dias es: $" . number_format($ganancia_total, 2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="resultado">
        <p><?php echo $respuesta_1;?></p>
        <p><?php echo $respuestaFinal;?></p>
    </div>
</body>
</html>