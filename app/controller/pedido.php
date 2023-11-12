<?php
namespace app\controller;
class pedido extends \framework\lib\controller{
    public function __construct(){
        parent::__construct('pedido_m');



    }

    public function listar(){


        $operation= new \concreteComponents\select($this->model);
        $operation= new \concreteDecorators\columns($operation,[
            'id_pedido' => 'id_pedido',
           'estado_pedido_estado'=>'estado',
           'fecha_creacion'=>'FechaCreacion',
           'fecha_efectiva'=>'Efectiva',
           'entrada_salida'=>'Entrada_Salida'
        ]);
        $operation->run();

        ob_clean();
        echo json_encode(['code'=>1,"message"=>$this->model->data]);
    }





}

?>