<?php
$mensaje = "";
$tabla = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST["nombres"]);
    $nota = trim($_POST["notas"]);

    if (!empty($nombresInput) && !empty($nota)) {
        $nombres = array_map('trim', explode(",", $nombre));
        $notas = array_map('floatval', explode(",", $nota));

        if (count($nombres) === count($notas)) {
            $numEstudiantes = count($nombres);

            // Promedio
            $promedio = array_sum($notas) / $numEstudiantes;

            // Nota más alta y baja
            $notaAlta = max($notas);
            $notaBaja = min($notas);

            // Construir tabla
            $tabla .= "<th>Alumno</th><th>Nota</th></tr>";

            for ($i = 0; $i < $numEstudiantes; $i++) {
                $tabla .= "<tr><td>{$nombres[$i]}</td><td>{$notas[$i]}</td></tr>";
            }

            $tabla .= "<tr<td>Promedio</td><td>" . number_format($promedio, 2) . "</td></tr>";
            $tabla .= "<tr style='font-weight:bold; color:green;'>
                        <td>Nota más alta</td><td>$notaAlta</td>
                      </tr>";
            $tabla .= "<tr style='font-weight:bold; color:red;'>
                        <td>Nota más baja</td><td>$notaBaja</td>
                      </tr>";
            $tabla .= "</table>";

        } else {
            $mensaje = "Debes ingresar la misma cantidad de nombres y notas.";
        }
    } else {
        $mensaje = "Los campos no pueden estar vacíos.";
    }
}
?>