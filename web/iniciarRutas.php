<?php


$ruta=explode("/",$_SERVER['REQUEST_URI']);

$clase=!empty($ruta[2])?$ruta[2]:"";
$metodo=!empty($ruta[3])?$ruta[3]:"";


$_GET["id"]=!empty($ruta[4])?$ruta[4]:"";

// var_dump($ruta);
// exit();
// $clase=!empty($ruta[1])?$ruta[1]:"";
// $metodo=!empty($ruta[2])?$ruta[2]:"";
// $_GET["id"]=!empty($ruta[3])?$ruta[3]:"";

unset($_GET["var"]);
$ruta=$clase."/".$metodo;





// rutas para API

\ web\web::registrarRutas("/","Routes","listar","Home");

\ web\web::registrarRutas("m_adm_rutas/","Routes","listar","Rutas");
\ web\web::registrarRutas("privilegios/nuevo","Privilegies","insertarActualizar","");
\ web\web::registrarRutas("privilegios/borrar","Privilegies","borrar","");

\ web\web::registrarRutas("ruta/listaToda","Routes","AllList","");






// usuarios
\ web\web::registrarRutas("m_adm_usuario/","usuario","listar","Usuarios");
\ web\web::registrarRutas("usuario/lista","usuario","listar","");
\ web\web::registrarRutas("usuario/crear","usuario","insertarActualizar","");
\ web\web::registrarRutas("usuario/actualizar","usuario","insertarActualizar","");
\ web\web::registrarRutas("usuario/validarSession","usuario","validarSession","");
\ web\web::registrarRutas("usuario/cerrarSession","usuario","cerrarSesion","");
\ web\web::registrarRutas("usuario/login","usuario","login","");
\ web\web::registrarRutas("usuario/listarUno","usuario","getOne","");

\ web\web::registrarRutas("usuario/borrar","usuario","borrar","");

// Asesores
\ web\web::registrarRutas("m_adm_asesor/","asesor","listar","asesores");
\ web\web::registrarRutas("asesor/lista","asesor","listar","");
\ web\web::registrarRutas("asesor/actualizar","asesor","insertarActualizar","");
\ web\web::registrarRutas("asesor/borrar","asesor","borrar","");
\ web\web::registrarRutas("asesor/reporteUsuario","usuario","report","");
\ web\web::registrarRutas("asesor/crear","asesor","insertarActualizar","");
\ web\web::registrarRutas("asesor/login","asesor","login","");



//Roles
\ web\web::registrarRutas("m_adm_roles/","roles","listar","Roles");
\ web\web::registrarRutas("roles/lista","roles","listar","");
\ web\web::registrarRutas("roles/actualizar","roles","insertarActualizar","");
\ web\web::registrarRutas("roles/borrar","roles","borrar","");
\ web\web::registrarRutas("roles/crear","roles","insertarActualizar","");




//producto
\ web\web::registrarRutas("m_adm_producto/","producto","listar","Productos");
\ web\web::registrarRutas("producto/lista","producto","listar","");
\ web\web::registrarRutas("producto/actualizar","producto","insertarActualizar","");
\ web\web::registrarRutas("producto/borrar","producto","borrar","");
\ web\web::registrarRutas("m_adm_producto/crear","producto","insertarActualizar","");

