<?php
namespace app\controller;

class reporteSalida extends \framework\lib\controller{
    function __construct()
    {
        parent::__construct("reporteSalida_m");
    }





    function salidas(){
       $operation= new \concreteComponents\select($this->model);
        $operation= new \concreteDecorators\all($operation);
        $operation->run();

        ob_clean();
        echo json_encode(['code'=>1,"message"=>$this->model->data]);
    }


}

?>