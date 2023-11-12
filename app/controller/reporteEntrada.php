<?php
namespace app\controller;

class reporteEntrada extends \framework\lib\controller{
    function __construct()
    {
        parent::__construct("reporteEntrada_m");
    }





    function entradas(){
       $operation= new \concreteComponents\select($this->model);
        $operation= new \concreteDecorators\all($operation);
        $operation->run();

        ob_clean();
        echo json_encode(['code'=>1,"message"=>$this->model->data]);
    }

    function compraFinalActual (){
        $this->model->callStoredProcedure([],'call CompraFinalActual()');
        ob_clean();
        echo json_encode(['code'=>1,"message"=>$this->model->data]);
    }
    function CompraFinalEstipuladaInicial (){
        $this->model->callStoredProcedure([],'call CompraFinalEstipuladaInicial()');
        ob_clean();
        echo json_encode(['code'=>1,"message"=>$this->model->data]);
    }
    function CompraFinalMeta (){
        $this->model->callStoredProcedure([],'call CompraFinalMeta()');
        ob_clean();
        echo json_encode(['code'=>1,"message"=>$this->model->data]);
    }
    function PrecioCompraSalida (){
        $this->model->callStoredProcedure([],'call PrecioCompraSalida()');
        ob_clean();
        echo json_encode(['code'=>1,"message"=>$this->model->data]);
    }

}

?>