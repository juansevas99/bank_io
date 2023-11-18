<?php
namespace app\model;
class privilegies_m extends \framework\lib\model{
    function __construct(){

        parent::__construct();

         $this->table="privilegies";
         $this->columns=[
            'id_rol_pr',
            'id_routes_pr'

         ];


    }


}

?>
