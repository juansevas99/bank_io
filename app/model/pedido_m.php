<?php

namespace app\model;
class pedido_m extends \framework\lib\model {
    public $data=[];
    function __construct()
    {
        parent::__construct();
         $this->table="pedido";
         $this->columns=['id_pedido','estado_pedido_estado','fecha_creacion','fecha_efectiva', 'entrada_salida'];


    }



}
?>