<?php
include_once "centrar.php";

function titulo(string $titulo, $ancho = 40): void {
    $titulo = centrar($titulo, $ancho); 
    echo "╔" . str_repeat("═", $ancho) . "╗\n";
    echo "║" .$titulo."║\n";
    echo "╚" . str_repeat("═", $ancho) . "╝\n";
}
