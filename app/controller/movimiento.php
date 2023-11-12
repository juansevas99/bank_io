<?php

namespace app\controller;
class movimiento extends \framework\lib\controller{
    
    public function __construct(){
        parent::__construct('movimiento_m');



    }
    public function listar(){
        $operation=new \concreteComponents\select($this->model);
        $operation=new \concreteDecorators\columns($operation,[
            'observaciones'=>'Observaciones',
            'pedido_id_pedido'=>'Pedido',
            'producto_id_producto'=>'Producto Cod'            
        ]);
        echo json_encode($this->model->data);

    }
   
}

?>