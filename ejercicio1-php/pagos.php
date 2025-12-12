<?php
require "ejercicio1.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos del socio</title>
</head>
    <body>

        <h1>Datos del socio</h1>

        <p><strong>Nombre:</strong> <?= $socios[1]["nombre"] ?></p>
        <p><strong>Apellidos:</strong> <?= $socios[1]["apellidos"] ?></p>
        <p><strong>DNI:</strong> <?= $socios[1]["dni"] ?></p>
        <p><strong>Email:</strong> <?= $socios[1]["email"] ?></p>
        <p><strong>Teléfono:</strong> <?= $socios[1]["telefono"] ?></p>


        <h2>Pagos del año</h2>

        <table border="1" cellpadding="8">
            <tr>
                <th>Mes</th>
                <th>Importe</th>
                <th>Estado</th>
                <th>Fecha de pago</th>
            </tr>

            <?php
            $total_pagado = 0;

            foreach ($socios[1]["pagos"] as $pago) {

                // Si el pago está pendiente, se pinta la fila en rojo
                $style = ($pago["estado"] == "Pendiente")
                    ? "style='background-color:#ffcccc;'"
                    : "";

                echo "<tr $style>";
                echo "<td>{$pago['mes']}</td>";
                echo "<td>{$pago['importe']} €</td>";
                echo "<td>{$pago['estado']}</td>";
                echo "<td>" . ($pago["fecha"] ?? "-") . "</td>";
                echo "</tr>";

                // Solo se sumara si el estado del pago es "Pagado"
                if ($pago["estado"] == "Pagado") {
                    $total_pagado += $pago["importe"];
                }
            }
            ?>

        </table>
        
        <h3>Total pagado: <?= $total_pagado ?> € </h3> 


    </body>
</html>