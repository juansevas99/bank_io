<?php
namespace app\model;

class producto_m extends \framework\lib\model{
    function __construct(){

        parent::__construct();

         $this->table="producto";
         $this->columns=[
            'id_producto',
            'tasa_interes_producto',
           'tipo_producto',
           'nombre_producto',
           

         ];

        
    }


}

?>
