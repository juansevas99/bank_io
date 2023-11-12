<?php
namespace app\model;
class privilegies_m extends \framework\lib\model{
    function __construct(){

        parent::__construct();

         $this->table="privilegies";
         $this->columns=[
            'roles_Id_rol',
            'routes_Id_routes'

         ];


    }


}

?>
