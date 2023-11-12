<?php
namespace app\model;
class pedido_entrada_m extends \framework\lib\model {
    public $data=[];
    function __construct()
    {
        parent::__construct();
         $this->table="pedido_entrada";
         $this->columns=["pedido_id_pedido","proveedor_id_proveedor","observaciones", "numeroFactura"];

         $this->manyToOne=[
            "pedido"=>["pedido_id_pedido","id_pedido"],
            "proveedor"=>["proveedor_id_proveedor","id_proveedor"],


        ];
    }



}
?>