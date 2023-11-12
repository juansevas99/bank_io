<?php
namespace app\model;

class proveedor_m extends \framework\lib\model{
    function __construct(){

        parent::__construct();

         $this->table="proveedor";
         $this->columns=[
            'id_proveedor',
            'contacto',
           'telefono'
           
         ];

       
    }

   
}

?>
