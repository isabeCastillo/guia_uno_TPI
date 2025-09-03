<?php
$inicio = 2;
$fin = 5;
$suma = 0.0;

for ($n = $inicio; $n <= $fin; $n++) {
    $termino = 1 + pow($n * sqrt($n), 1/3);
    $suma += $termino;
}

$suma_redond = round($suma, 2);
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
    <h1>Resultado de la serie</h1>
    <p>La suma de la serie es: <?php echo $suma_redond?></p>
</body>
</html>