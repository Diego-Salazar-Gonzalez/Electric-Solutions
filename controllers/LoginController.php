<?php
namespace Controllers;

use MVC\Router;
use Model\Admin;
class LoginController{
    public static function login(Router $router){
        $alertas =[];
        if($_SERVER['REQUEST_METHOD']=== 'POST'){
           $auth = new Admin($_POST);
           $alertas = $auth->validar();
           
           if(empty($errores)){
                //Verificar si el usuario existe
                $resultado = $auth->existeUsuario();
                
                if(!$resultado){
                    $alertas = Admin::getAlertas();
                   
                }else{
                   
                    $autenticado = $auth->verificarPassword($resultado);
                    if($autenticado){
                        //Autenticar al usuario
                        $auth->autenticar();
                    }else{
                        //Pasword Incorrecto
                        $alertas = Admin::getAlertas();
                    }
                }
               


                //autenticar
           }
        }
        $router->render('auth/login',[
            'alertas' =>$alertas,
            'titulo' =>''
        ]);
    }

    public static function logout(){
        session_start();
        $_SESSION = [];
        header('Location: /');
    }
}