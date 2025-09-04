<?php
$mensaje = "";
$tabla = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombresInput = trim($_POST["nombres"]);
    $notasInput = trim($_POST["notas"]);

    if (!empty($nombresInput) && !empty($notasInput)) {
        // Convertir a arrays
        $nombres = array_map('trim', explode(",", $nombresInput));
        $notas = array_map('floatval', explode(",", $notasInput));

        if (count($nombres) === count($notas)) {
            $numEstudiantes = count($nombres);

            // Promedio
            $promedio = array_sum($notas) / $numEstudiantes;

            // Nota más alta y más baja
            $notaAlta = max($notas);
            $notaBaja = min($notas);

            // Construir tabla
            $tabla .= "<table>";
            $tabla .= "<tr><th>Alumno</th><th>Nota</th></tr>";

            for ($i = 0; $i < $numEstudiantes; $i++) {
                $tabla .= "<tr><td>{$nombres[$i]}</td><td>{$notas[$i]}</td></tr>";
            }

            $tabla .= "<tr><td><strong>Promedio</strong></td><td><strong>" . number_format($promedio, 2) . "</strong></td></tr>";
            $tabla .= "<tr style='color:green; font-weight:bold;'><td>Nota más alta</td><td>$notaAlta</td></tr>";
            $tabla .= "<tr style='color:red; font-weight:bold;'><td>Nota más baja</td><td>$notaBaja</td></tr>";
            $tabla .= "</table>";

        } else {
            $mensaje = "Debes ingresar la misma cantidad de nombres y notas.";
        }
    } else {
        $mensaje = "Los campos no pueden estar vacíos.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Sistema de Notas</h1>

    <form method="post">
        <label for="nombres">Nombres de los alumnos (separados por coma):</label>
        <input type="text" name="nombres" id="nombres" placeholder="Ej: Ana, Juan, Pedro" required>

        <label for="notas">Notas de los alumnos (separadas por coma):</label>
        <input type="text" name="notas" id="notas" placeholder="Ej: 7, 8.5, 10" required>

        <button type="submit">Calcular</button>
    </form>

    <div class="resultado">
        <?php 
        if ($mensaje) echo "<p class='error'>$mensaje</p>";
        if ($tabla) echo $tabla;
        ?>
    </div>
</body>
</html>
