<?php

// Declaramos el array con la información.

$tablas = [
    "primera"=> 5,
    "segunda"=> 13,
    "tercera"=> 11
];


// Mostramos la información.

// Primero, se imprime la cabecera de la página html.

echo ('<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Tabla Multiplicar</title><link rel="stylesheet" href="../css/styles.css" type="text/css"></head>');

// Segundo, imprimir estructura de tabla y cabeceras.

echo ('<body>');
echo ('<div class="container">');
echo ('<table class="tabla-equipos">');
echo ('<tr class="cabecera-tabla">');
echo ('<th>Primera Tabla</th>');
echo ('<th>Segunda Tabla</th>');
echo ('<th>Tercera Tabla</th>');
echo ('</tr>');

// Tercero, imprimir los datos con un foreach.

for ($i=0; $i<=10; ++$i) {
    echo('<tr>');   
    foreach ($tablas as $clave => $valor) {        
        echo('<td>');        
        echo($valor . " x " . $i . " = " . ($valor*$i));
        echo('</td>');        
    };
    echo('</tr>');   
};

// Finalmente, se imprime el resto etiquetas de cierre html.

echo('</table></div></body></html>');

?>