<?php

namespace Namespaces;

use Namespaces\Controllers\CourseController;
use Namespaces\Models\Course;

// Función para registar una clase que se debe autocargar y no requerir el archivo del namespace
spl_autoload_register(function($clase) {
    $archivoImportar = str_replace('\\', '/', $clase) . '.php';
    $archivoImportar = str_replace('Namespaces/', '', $archivoImportar);

    // Validación para verificar si el archivo existe
    require_once (file_exists($archivoImportar) ? $archivoImportar : '');
});

// Al momento de invocar al constructor, se dispara el autoload de la clase
$cursos = [new Course, new CourseController];

foreach ($cursos as $curso) {
    $curso->saludar();
    echo "<br>";
}
