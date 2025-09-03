<?php
$resultado = null;
$numero = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = (int) $_POST["numero"];
    if ($numero < 0) {
        $resultado = "El factorial no esta definido para numeros negativos";
    } else {
        $factorial = 1;
        $i = 1;
        do {
            $factorial *= $i;
            $i++;
        } while ($i <= $numero);
        $resultado = "El factorial de $numero es $factorial";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <form action="" method="post">
        <label for="">Ingresa un numero</label>
        <input type="number" name="numero" id="">
        <button type="submit">Calcular</button>
    </form>
    <p> <?php echo $resultado; ?> </p>
</body>
</html>