<?php
namespace app\controller;

class salida_test extends \framework\lib\movimiento_test{
    public function __construct(){
        Controller::__construct('salida_test_m');



    }

    public function lista(){

            
        $operation= new \concreteComponents\select($this->model);
        $operation= new \concreteDecorators\columns($operation,[
            // 'movimiento_id_movimient o'=>'Movimiento',
            'movimiento_id_movimiento' => 'Movimiento',
           'pedido_salida_pedido_id_pedido'=>'Pedido',
           'observaciones'=>'Observaciones'
        ]);
        $operation= new \concreteDecorators\inner($operation,"movimiento_test", 
        [
        'cantidad'=>'Cantidad',
        'precio_unitario'=>'Precio Unitario',
        'hecho'=>'Hecho']);
        
        tablas::paginate($operation,3,$_GET['id']);
        echo json_encode([$this->model->data,tablas::$pages]);
            
    
            
    
    }


    public function crear(){
        
    }
}

?>