<?php
namespace Model;

class Admin extends ActiveRecord{
    //Base de datos
    protected static $tabla = 'usuarios';
    protected static $colmnasDB = ['id','email','password'];


    public $id;
    public $email;
    public $password;

    public function __construct($args = [])
    {
        $this->id =$args['id'] ?? null;
        $this->email =$args['email'] ?? '';
        $this->password =$args['password'] ?? '';
    }

    public function validar(){
        if(!$this->email){
            self::$alertas[] = 'El correo es obligatorio';
        }
        if(!$this->password){
            self::$alertas[] = 'La contraseña es obligatoria';
        }
        return self::$alertas;
    }
    public function existeUsuario(){
        //Revisar si un usuario existe
        $query = "SELECT * FROM " . self::$tabla . " WHERE email = '" . $this->email ."' LIMIT 1";

        $resultado = self::$db->query($query);
       
       if(!$resultado->num_rows){
        self::$alertas[] = 'El usuario no existe';
        return;
       }
       return $resultado;
    }
    public function verificarPassword($resultado){
        
        $usuario = $resultado->fetch_object();
        
        $autenticado = password_verify($this->password, $usuario->password);
        
          if(!$autenticado){
            self::$alertas[] = 'La contraseña es incorrecta';
            
          }
          return $autenticado;
    }
    public function autenticar(){
        session_start();
        $_SESSION['usuario'] = $this->email;
        $_SESSION['login'] = true;
        header('Location: /admin');
    }
}
