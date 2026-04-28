<?php 
// Scope / Alcance o ambito de Variables

// $tareas es un arreglo de arreglos asociativos
// cada tadare debe de tener al menos su key de 
// descripcion y completada
function listarTareas($tareas) {
    
    echo "======= LISTA DE TAREAS ======\n";
    for( $i = 0; $i< count($tareas); $i++ ) {
        $completada = $tareas[$i]["completada"];
        $id = $tareas[$i]["id"];
        if($completada){
            $simbolo = "✓";
        } else {
            $simbolo = "-";
        }
        echo $id . " ". $simbolo . " " . $tareas[$i]["descripcion"] ."\n";
    }
    echo "Enter para continuar\n";
    readline();
}