<?php
namespace Controllers;

use MVC\Router;
use Classes\Email;
use PHPMailer\PHPMailer\PHPMailer;

class PaginasController{
    
    public static function index(Router $router){
        $router->render('paginas/index',[
           
            'titulo' => ''
        ]);
    }
    public static function nosotros(Router $router){
        $router->render('paginas/nosotros',[
            'titulo' => 'nosotros'
        ]);
    }
    public static function servicios(Router $router){
        $router->render('paginas/servicios',[
            'titulo' => 'servicios'
        ]);
    }
    public static function contacto(Router $router){
       $mensaje = null;
        
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $usuario= ($_POST['contacto']);
             
            $email = new Email($usuario['nombre'],$usuario['email'],$usuario['telefono'],$usuario['mensaje']);
            
            $mensaje = $email->enviarMensaje();
          
        }
        $router->render('paginas/contacto',[
            'titulo' => 'contacto',
            'mensaje' => $mensaje
        ]);
    }
    public static function servicio(Router $router){
        $mensaje=null;
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $usuario= ($_POST['contacto']);
            
            $email = new Email($usuario['nombre'],$usuario['email'],$usuario['telefono'],$usuario['mensaje']);
            
            $mensaje = $email->enviarMensaje();
          
        }
        $router->render('paginas/servicio',[
            'titulo' => '',
            'mensaje' =>$mensaje
        ]);
    }
}