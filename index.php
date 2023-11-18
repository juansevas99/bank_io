<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:*');
header('Access-Control-Allow-Headers:*');


var_dump(file_get_contents("php://input"));
$input = json_decode(file_get_contents("php://input"));
$_POST=(array)(get_object_vars($input)['body']);



require './vendor/autoload.php';


require 'web/iniciarRutas.php';



if (\web\web::ValidarRutas($ruta)){
    
    if(\web\web::validarUSuario($ruta)  ){
        \web\web::validarArchivos($ruta); //fecade-- Separarlos GET,POST

    }
    else{
        ob_clean();
    echo json_encode(['code'=>2,"message"=>"Acceso denegado, ruta no permitida para usuario, Consulte a admnistrador"]);
    }
 }
 else{

    ob_clean();
    echo json_encode(['code'=>0,"message"=>"Ruta(s) no encontrada(s):: ".$ruta]);
}
