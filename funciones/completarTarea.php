<?php

function completarTarea(&$tareas) {
    echo "¿Cual tarea ya terminaste ? (ingresa su id):";
    $id = (int)readline();

    for($i=0; $i< count($tareas); $i++) {
        if($tareas[$i]['id'] === $id) {
            $tareas[$i]['completada'] = true;
            break;
        }
    }
}