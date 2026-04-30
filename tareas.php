<?php 
include_once "funciones/index.php";
$tareas = datosTareas();
$salir = false;
limpiarPantalla();
while($salir == false) {
    imprimiMenu();
    $opcion = (int)readline();
    switch($opcion) {
        case 1: 
            limpiarPantalla();
            listarTareas(); 
        break;
        case 2: 
            completarTarea($tareas);
            limpiarPantalla(); 
            listarTareas($tareas); 
        break;
        case 3: 
            agregarTarea($tareas); 
            limpiarPantalla(); 
            listarTareas($tareas); 
        break;
        break; 
        case 4: 
            echo "Adios!";
            $salir = true;
        break;
        default: 
            echo "Opcion No Valida\n";
    }
}
