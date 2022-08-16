<?php

define('CARPETA_IMAGENES', $_SERVER['DOCUMENT_ROOT'] . '/imagenes/');

function debugear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

//verificar admin autenticado
function isAdmin() : void{
    if (!isset($_SESSION['login'])){
       header('Location: /');
    }
   
}
//muestra mensajes 
function mostrarAlerta($codigo) {
    $mensaje = '';

    switch ($codigo) {
        case 1:
            $mensaje = 'Servicio Creado Correctamente';
            break;
        case 2:
            $mensaje = 'Servicio Actualizado Correctamente';
            break;
        case 3:
            $mensaje = 'Servicio Eliminado Correctamente';
            break;
        default:
            $mensaje = false;
            break;
    }
    return $mensaje;
}

function validarId(string $url) {
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header("Location: ${url} " );
    }

    return $id;
}