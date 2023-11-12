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
                ];

               

        }

    }

?>