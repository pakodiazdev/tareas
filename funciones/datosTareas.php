<?php 

function datosTareas() {
    $tareas = [
        [
            'id' => 1, 
            'descripcion' => 'Estudiar SQL',
            'completada' => false
        ],
        [
            'id' => 2, 
            'descripcion' => 
            'Hacer tarea PHP', 
            'completada' => true
        ],
        [
            'id' => 3, 
            'descripcion' => 
            'Leer clase 20', 
            'completada' => false
        ],
    ];

    $tareas[] = [
        'id' => 4, 
        'descripcion' => 'Limpiar Cuarto',
        'completada' => false
    ];

    $tareas[] = [
        'id' => 5, 
        'descripcion' => 'Alimentar a Solovino',
        'completada' => false
    ];
    return $tareas;
}