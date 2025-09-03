<?php
$suma = 0.0;
$signo =1;

for ($n=1; $n <=4 ; $n++) { 
    $termino = $signo *($n /($n+1));
    $suma += $termino;
    $signo *= -1;
}
$sumared = round($suma,2);
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
        <p>El valor es: <?php echo $sumared;?></p>
    </div>
</body>
</html>