<?php
namespace app\model;

class user_m extends \framework\lib\model{

    function __construct()
    {
        parent::__construct();
        $this->table="usuario";
        $this->columns=["id_usuario","tipo_documento_usuario","email","password","tipo_usuario_id_tipo_usuario","documento_usuario","user_name","token","roles_Id_rol"];


        $this->manyToOne=[
            "roles"=>["roles_Id_rol","Id_rol","token"]

        ];

    }


}