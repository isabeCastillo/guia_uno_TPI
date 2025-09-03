<?php
$banco = "1200";
$interes = "0.13";
$meses = "18";
$respuestaFinal ="";
//cantidad de dinero en 1 año y 6 meses
$respuestaFinal = $banco * pow((1 + $interes), $meses);
$respuestaFinal = round($respuestaFinal, 2);

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
    <div class="resultado">
        <p>La cantidad que habra en 1 año y medio será: $<?php echo $respuestaFinal;?></p>
    </div>
</body>
</html>