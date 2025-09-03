<?php
$resultado="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"] ?? 0;
    $b = $_POST["b"] ?? 0;
    if ($a > 0 && $b > 0) {
        $lado = ($a * $a) + ($b * $b);
        $resultado = "El tercer lado de un triángulo rectangular es: ".$lado;
    }else{
    $resultado = "Por favor ingrese valores mayor a 0";}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="formulario">
        <form action="" method="post">
            <label for="">Ingrese el primer lado</label>
            <input type="number" name="a" id="">
            <label for="">Ingrese el segundo lado</label>
            <input type="number" name="b" id="">
            <button type="submit">Calcular</button>
        </form>
    </div>
    <div class="resultado">
        <p><?php echo $resultado;?></p>
    </div>
</body>
</html>