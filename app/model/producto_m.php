<?php
namespace app\model;

class producto_m extends \framework\lib\model{
    function __construct(){

        parent::__construct();

         $this->table="producto";
         $this->columns=[
            'id_producto',
            'precioUnitario',
           'stock_inicial',
           'fecha_creacion',
           'categoria_id_categoria',
           'stock_actual',
           'producto',
           'estado'

         ];

         $this->manyToOne=[
            "categoria"=>["categoria_id_categoria","id_categoria"]

        ];
    }


}

?>
