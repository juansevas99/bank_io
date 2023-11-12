<?php
namespace app\model;

class roles_m extends \framework\lib\model{
   
    function __construct()
    {
        parent::__construct();
        $this->table="roles";
        $this->columns=["Id_rol","rol_name","description"];

        
        
        
    } 


}