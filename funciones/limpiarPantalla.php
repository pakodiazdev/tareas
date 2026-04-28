<?php

function limpiarPantalla(): void
{
    echo "\033[2J\033[;H";
    if (PHP_OS_FAMILY === 'Windows') {
        system('cls');
    } else {
        system('clear');
    }
}