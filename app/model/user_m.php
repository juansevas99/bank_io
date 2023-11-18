<?php
namespace app\model;

class user_m extends \framework\lib\model{

    function __construct()
    {
        parent::__construct();
        $this->table="usuario";
        $this->columns=["id_usuario","documento_usuario","tipo_documento_usuario",
        "nombre_usuario","tipo_usuario_id_tipo_usuario", "usuario_rol_id","email", 
        "password", "token"];


        $this->manyToOne=[
            "roles"=>["usuario_rol_id","Id_rol","token"],
            "tipo_usuario"=>["tipo_usuario_id_tipo_usuario","id_tipo_usuario"]

        ];

    }


}