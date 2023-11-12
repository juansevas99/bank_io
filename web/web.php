<?php


// requerimiento: Se necesita que se implemente una forma para poder hacer
// 1. Validacion de estrucura y de existencia de rutas
// 2. Acceso a rutas desde cualquier parte de la aplicacion
// 3. Inicializacion de clases y metodos desde las rutas

namespace  web;
class web
{


    public static $routes=[];
    function __construct()
    {

    }
    static function validarUSuario($ruta){
        $class= new \app\controller\Routes();
        return $class->usuarioRuta($ruta);
    }
    static function registrarRutas($rutaBar, $clase, $metodo,$name){
        
        \ web\web::$routes[$rutaBar]=[$clase,$metodo]; // it suggested that if it specified the same route, it is going to relate the last specified route
        
        $class= new \app\controller\Routes();
        
        $class->insertarActualizar(["routes_name"=>$rutaBar,"module"=>$name]);
        
    }
    static function ValidarRutas($rutaBar){
        // echo $rutaBar;
        // exit();
        $exists=array_key_exists($rutaBar,\ web\web::$routes);
        return $exists;
    }
    static function validarArchivos($rutaBar){


        $controller="\\app\\Controller\\".$controller=\ web\web::$routes[$rutaBar][0];

        $class= new $controller();
        $class->{\web\web::$routes[$rutaBar][1]}();


        }//  verify the existence of both: method and class
    static function borrarRuta($ruta){
        $class= new \app\controller\Routes();
        $class->borrar($ruta);
    }

}




