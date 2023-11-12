<?php
namespace app\model;
class movimiento_salida_m extends \framework\lib\model{
    function __construct(){

        parent::__construct();

         $this->table="salida";
         $this->columns=[
            'movimiento_id_movimiento',
            'pedido_salida_pedido_id_pedido',
           'observaciones'

         ];

         $this->manyToOne=[
            "movimiento"=>["movimiento_id_movimiento","id_movimiento"],
            "pedido"=>["pedido_entrada_pedido_id_pedido","id_pedido"]
        ];
    }


}

?>
