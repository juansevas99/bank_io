<?php
namespace app\model;

class tipo_usuario_m extends \framework\lib\model{

    function __construct()
    {
        parent::__construct();
        $this->table="tipo_usuario";
        $this->columns=["id_tipo_usuario","descripcion_usuario"];


        // $this->manyToOne=[
        //     //"roles"=>["roles_Id_rol","Id_rol","token"]
        //     "tipo_usuario"=>["tipo_usuario_id_tipo_usuario","id_tipo_usuario"]

        // ];

    }


}