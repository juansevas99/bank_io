<?php
namespace app\model;

class medida_m extends \framework\lib\model{
    function __construct(){

        parent::__construct();

         $this->table="medida";
         $this->columns=[
            'id_medida',
            'medida',
           'descripcion'
           
         ];

         
    }

   
}

?>
