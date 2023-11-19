<?php
namespace app\model;

class cuenta_m extends \framework\lib\model{

    function __construct()
    {
        parent::__construct();
        $this->table="cuenta";
        $this->columns=["id_cuenta","saldo_cuenta","producto_id_producto","usuario_id_usuario"];


        $this->manyToOne=[
            "producto"=>["producto_id_producto","id_producto"],
            "usuario"=>["usuario_id_usuario","id_usuario"]

        ];

    }


}