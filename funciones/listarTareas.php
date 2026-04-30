<?php 
// Scope / Alcance o ambito de Variables

// $tareas es un arreglo de arreglos asociativos
// cada tadare debe de tener al menos su key de 
// descripcion y completada

function listarTareas() {
    $tareas = datosTareas();
    echo "======= LISTA DE TAREAS ======\n";
    for( $i = 0; $i< count($tareas); $i++ ) {
        $completada = $tareas[$i]["estado"];
        $id = $tareas[$i]["id"];
        if($completada == 1){
            $simbolo = "✓";
        } else {
            $simbolo = "-";
        }
        echo $id . " ". $simbolo . " " . $tareas[$i]["descripcion"] ."\n";
    }
    echo "Enter para continuar\n";
    readline();
}