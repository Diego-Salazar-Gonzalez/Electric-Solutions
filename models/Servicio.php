<?php

namespace Model;

class Servicio extends ActiveRecord{
    protected static $tabla = 'servicios';
    protected static $columnasDB = ['id','titulo','imagen','descripcion','puntosclave','titulo_persuasivo','subtitulo_persuasivo'];

    public $id;
    public $titulo;
    public $imagen;
    public $descripcion;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->puntosclave = $args['puntosclave'] ?? '';
        $this->titulo_persuasivo = $args['titulo_persuasivo'] ?? '';
        $this->subtitulo_persuasivo = $args['subtitulo_persuasivo'] ?? '';

    }
    public function validar(){
        if(!$this->titulo){
            self::$alertas[] ='Debes Añadir un titulo';
        }
        if(!$this->imagen){
            self::$alertas[] ='Debes Añadir una imagen';
        }
       
        if(!$this->descripcion){
            self::$alertas[] ='Debes Añadir una descripcion';
        }
        if(!$this->puntosclave){
            self::$alertas[] ='Debes Añadir puntos claves del servicio';
        }
        if(!$this->titulo_persuasivo){
            self::$alertas[] ='Debes Añadir Un titulo Persuasivo';
        }


        return self::$alertas;
    }
}