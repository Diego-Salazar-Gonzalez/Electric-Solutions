<?php
namespace Controllers;
use MVC\Router;
use Model\Servicio;
use Intervention\Image\ImageManagerStatic as Image;

class AdminController{
    public static function index(Router $router){
        isAdmin();
        $servicios = Servicio::all();
        $resultado = $_GET['resultado'] ?? null; 
        
        $router->render('admin/index',[
            'titulo' =>'administrar',
            'servicios'=>$servicios,
            'resultado'=>$resultado
        ]);

    }
    public static function crearServicio(Router $router){
        isAdmin();
         $alertas = Servicio::getAlertas();
        $servicio = new Servicio;
        $resultado=null;
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            //crear instancia
            
             $servicio = new Servicio($_POST['servicio']);
           
            // //generar nombre
             $nombreImg = md5(uniqid(rand(),true)) .".jpg";
            
            //resize img
            if($_FILES['servicio']['tmp_name']['imagen']){
                $image = Image::make($_FILES['servicio']['tmp_name']['imagen'])->fit(800,600);
                
                $servicio->setImg($nombreImg);
            }

            //Validar
            $alertas = $servicio->validar();
            if(empty($alertas)){

                //Crear la carpeta para subir
                if(!is_dir(CARPETA_IMAGENES)){
                    mkdir(CARPETA_IMAGENES);
                }

                //GUARDAR
                $image->save(CARPETA_IMAGENES . $nombreImg);
                //guardar
                $resultado = $servicio->guardar();
                if($resultado){
                    header('location: /admin?resultado=1');
                }
            }
            
        }
        
        $router->render('admin/servicios-crear',[
            'titulo' => '',
            'alertas' =>$alertas,
            'servicio'=>$servicio,
            
        ]);

    }
    public static function servicioEliminar(Router $router){
        isAdmin();
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $id=$_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
            
            $servicio = Servicio::find($id);
            $resultado = $servicio->eliminar();
            if($resultado){
                header('location: /admin?resultado=3');
            }
        }
    }
    public static function actualizarServicio(Router $router){
        isAdmin();
        $id= validarId('/servicios');

        //obtener los datos del servicio
        $servicio = Servicio::find($id);
       
        $alertas = Servicio::getAlertas();
        
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            //asignamos los atributos
           
            $args = $_POST['servicio'];
            $servicio->sincronizar($args);
            //validar
            
            $alertas = $servicio->validar();
            
            //subida de imagen
            $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";
            if($_FILES['servicio']['tmp_name']['imagen']) {
                $image = Image::make($_FILES['servicio']['tmp_name']['imagen'])->fit(800,600);
                $servicio->setImg($nombreImagen);
            }

            if(empty($alertas)){
                if($_FILES['servicio']['tmp_name']['imagen']) {
                    $image->save(CARPETA_IMAGENES . $nombreImagen);
                }

                // Guarda en la base de datos
                $resultado = $servicio->guardar();
                
                if($resultado) {
                    header('location: /admin?resultado=2');
                }
            }
            

        }
        $router->render('admin/actualizar-servicio',[
            'titulo' => '',
            'alertas' =>$alertas,
            'servicio'=>$servicio,
            
        ]);

    }
    
}