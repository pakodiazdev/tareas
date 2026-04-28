# Tareas

Sistema de gestión de tareas por línea de comandos escrito en PHP. Permite listar, agregar y marcar tareas como completadas desde la terminal, sin necesidad de base de datos ni interfaz web.

---

## Enunciado de la práctica

> Estas son las instrucciones que deberían haberse dado para desarrollar esta práctica.

### Objetivo
Crear una aplicación de consola en PHP que permita gestionar una lista de tareas, aplicando los conceptos de **funciones**, **arreglos asociativos**, **paso de argumentos por referencia**, **bucles**, **estructuras de control** y **separación de código en archivos**.

### Requisitos funcionales

La aplicación debe ejecutarse desde la terminal con `php tareas.php` y presentar un menú en bucle que ofrezca las siguientes opciones:

1. **Listar tareas** — Mostrar todas las tareas con su ID y un símbolo que indique si están completadas (`✓`) o pendientes (`-`).
2. **Marcar tarea como realizada** — Solicitar al usuario el ID de una tarea y cambiar su estado a completada.
3. **Agregar nueva tarea** — Solicitar al usuario la descripción de una nueva tarea y añadirla al arreglo.
4. **Salir** — Terminar el programa.

### Requisitos técnicos

- **Estructura de datos:** cada tarea debe ser un arreglo asociativo con al menos las claves `id`, `descripcion` y `completada`.
- **Datos iniciales:** cargar al menos 4 tareas de ejemplo en una función `datosTareas()`.
- **Separación por archivos:** cada función debe vivir en su propio archivo dentro de una carpeta `funciones/`. Usar un `index.php` dentro de esa carpeta que incluya todos los archivos con `include_once`.
- **Paso por referencia:** las funciones que modifican el arreglo de tareas (`agregarTarea`, `completarTarea`) deben recibir el arreglo usando `&$tareas`.
- **Limpiar pantalla:** implementar una función `limpiarPantalla()` compatible con Windows y Linux/Mac usando `PHP_OS_FAMILY`.
- **Función `titulo()`:** crear una función que reciba un string y un ancho, y lo imprima centrado dentro de un recuadro con caracteres especiales (`╔`, `═`, `╗`, `║`, `╚`, `╝`).
- **Función `centrar()`:** crear una función auxiliar que reciba un texto y un ancho, y devuelva el texto con espacios a ambos lados para centrarlo. Debe manejar correctamente caracteres UTF-8 con `mb_strlen`.
- **Bucle principal:** el menú debe repetirse hasta que el usuario elija la opción Salir. Usar un `while` con una variable bandera `$salir`.

### Criterios de evaluación

| Criterio | Descripción |
|---|---|
| Funcionalidad | Las 4 opciones del menú funcionan correctamente |
| Estructura | Código separado en archivos dentro de `funciones/` |
| Arreglos | Uso correcto de arreglos asociativos |
| Referencias | Uso de `&$tareas` donde corresponde |
| Compatibilidad | `limpiarPantalla()` funciona en Windows y Unix |
| Presentación | Títulos centrados con recuadro decorativo |

---

## Requisitos

- PHP 8.0 o superior instalado en el sistema
- Terminal / consola (CMD, PowerShell, Bash, etc.)

Verificar que PHP esté disponible:

```bash
php --version
```

---

## Cómo correr la aplicación

Desde la raíz del proyecto ejecutar:

```bash
php tareas.php
```

---

## Instrucciones de uso

Al iniciar el programa se muestra el menú principal con cuatro opciones:

| Opción | Acción                    |
|--------|---------------------------|
| 1      | Listar todas las tareas   |
| 2      | Marcar una tarea como realizada |
| 3      | Agregar una nueva tarea   |
| 4      | Salir del programa        |

Escribe el número de la opción y presiona **Enter**.

### Listar tareas (opción 1)
Muestra todas las tareas con su ID y estado. El símbolo `✓` indica tarea completada y `-` indica tarea pendiente.

### Marcar tarea realizada (opción 2)
El programa pregunta el ID de la tarea terminada. Ingresa el número y presiona Enter; la tarea quedará marcada con `✓`.

### Agregar tarea (opción 3)
El programa solicita la descripción de la nueva tarea. Escríbela y presiona Enter para guardarla.

### Salir (opción 4)
Cierra el programa mostrando el mensaje `Adios!`.

---

## Pantallas de la aplicación

### Menú principal

```
╔══════════════════════════════════════════════════╗
║                   OPCIONES:                      ║
╚══════════════════════════════════════════════════╝
Seleciona una opcion
 1 - Listar Tareas
 2 - Marcar Tarea Realizada
 3 - Agregar Nueva Tarea
 4 - Salir
```

### Lista de tareas

```
======= LISTA DE TAREAS ======
1 - Estudiar SQL
2 ✓ Hacer tarea PHP
3 - Leer clase 20
4 - Limpiar Cuarto
Enter para continuar
```

### Marcar tarea como realizada

```
¿Cual tarea ya terminaste ? (ingresa su id):
```

### Agregar nueva tarea

```
¿Que tarea quieres agregar?
```

---

## Estructura del proyecto

```
tareas/
├── tareas.php          # Punto de entrada principal
└── funciones/
    ├── index.php           # Incluye todas las funciones
    ├── datosTareas.php     # Datos iniciales de ejemplo
    ├── listarTareas.php    # Imprime la lista de tareas
    ├── agregarTarea.php    # Agrega una nueva tarea al arreglo
    ├── completarTarea.php  # Marca una tarea como completada
    ├── imprimirMenu.php    # Muestra el menú de opciones
    ├── titulo.php          # Genera títulos con borde decorativo
    ├── centrar.php         # Centra texto dentro de un ancho
    └── limpiarPantalla.php # Limpia la consola
```