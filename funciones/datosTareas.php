<?php 

function datosTareas() {
    $mysqli = mysqli_connect("127.0.0.1", "root", "", "tareas");
    $consultaSQL = "SELECT * FROM tarea";
    $result = mysqli_query($mysqli, $consultaSQL);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $rows;
}