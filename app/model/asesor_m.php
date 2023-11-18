<?php
namespace app\model;

    class asesor_m extends \framework\lib\model{
        function __construct(){
            parent::__construct();
             $this->table="asesor";
             $this->columns=[
                'id_asesor',
                'nombre_asesor',
                'documeto_asesor',
                'ubicacion_asesor',
                'roles_id_asesor',
                'user_name',
                'password'
                ];

            $this->manyToOne=[
                "roles"=>["roles_id_asesor","Id_rol"]
    
            ];

        }

    }

?>