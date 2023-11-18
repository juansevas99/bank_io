<?php
namespace app\model;

class routes_m extends \framework\lib\model{
    function __construct(){

        parent::__construct();
        $this->table="routes";

        $this->columns=[
            'id_routes',
            'routes_name',
            'module',
            'descripcion',
            'icono'
        ];

        $this->manyToOne=[
            "privilegies"=>["id_routes","id_routes_pr"]
            // "marca"=>["marca_id_marca","id_marca"]

        ];

    }

}
?>