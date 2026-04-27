<?php 

function agregarTarea(&$tareas) {
    echo "¿Que tarea quieres agregar? \n";
    $tarea = readline();
    $tareas[] = [
        "id" => count($tareas) + 1,
        "tarea" => $tarea,
        "completada" => false
    ];
}
