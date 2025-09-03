<?php
$base=4;
$alturaTri=7;

$areaBase = (1/2)*($base*$alturaTri);
$volumen = $areaBase * $alturaTri;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio volumen</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="resultado">
        <p>El volumen de un prisma triangular es:</p>
        <p><?php echo $volumen;?></p>
    </div>
</body>
</html>