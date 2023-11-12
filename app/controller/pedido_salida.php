<?php
namespace app\controller;
class pedido_salida extends \framework\lib\controller{
    public function __construct(){
        parent::__construct('pedido_salida_m');



    }

    public function listar(){


        $operation= new \concreteComponents\select($this->model);
        $operation= new \concreteDecorators\columns($operation,[
            // 'movimiento_id_movimient o'=>'Movimiento',
            'pedido_id_pedido' => 'Pedido',
           'observaciones'=>'Observaciones',
           'destino'=>'Destino'
        ]);
        $operation= new \concreteDecorators\inner($operation,"pedido",
        [
        'estado_pedido_estado'=>'Estado',
        'fecha_creacion'=>'Creacion',
        'fecha_efectiva'=>'FechaEfectiva']);
        $operation=new \concreteDecorators\orderby($operation,['fecha_efectiva'],"DESC");

        $operation->run();
        ob_clean();
        echo json_encode(['code'=>1,"message"=>$this->model->data]);





    }



    public function listarUno(){
        $operation= new \concreteComponents\select($this->model);
        $operation= new \concreteDecorators\columns($operation,[
            // 'movimiento_id_movimient o'=>'Movimiento',
            'pedido_id_pedido' => 'Pedido',
           'observaciones'=>'Observaciones',
           'destino'=>'Destino'
        ]);
        $operation= new \concreteDecorators\inner($operation,"pedido",
        [
        'estado_pedido_estado'=>'Estado',
        'fecha_creacion'=>'Creacion',
        'fecha_efectiva'=>'FechaEfectiva']);
        $operation= new \concreteDecorators\where($operation,['pedido_id_pedido'=>$_POST['pedido']]);
        $operation->run();
        ob_clean();
        echo json_encode(['code'=>1,"message"=>$this->model->data]);
    }

    public function modificarEstadoPedido(){


        $this->model->callStoredProcedure(['pedido'=>$_POST['pedido']],'call updateStockSalida(:pedido)');
        ob_clean();
        echo json_encode(['code'=>1,"message"=>$this->model->data]);
    }
    function borrar(){
        $model=new \app\controller\pedido();


        $operation=new \concreteComponents\select($this->model);
        $operation=new \concreteDecorators\all($operation);
        $operation= new \concreteDecorators\inner($operation,"pedido");
        $operation=new \concreteDecorators\where($operation,['id_pedido'=>$_GET['id']]);

        $operation->run();

        if (empty($this->model->data)){
            ob_clean();
            echo json_encode(['code'=>0,"message"=>"No se encontro ningun registro"]);
        }
        else{
            $operation=new \concreteComponents\delete($model);
            $operation=new \concreteDecorators\where($operation,['id_pedido'=>$_GET['id']]);
            $operation->run();
            ob_clean();
            echo json_encode(['code'=>1,"message"=>"Borrado exitosamente"]);

        }



    }


    public function modificar(){

        $modelPedido=new \app\controller\pedido();
        $operation= new \concreteComponents\update($modelPedido->getModel());
        $operation= new \concreteDecorators\set($operation,['fecha_efectiva'=>$_POST['fecha_efectiva']]);

        $operation= new \concreteDecorators\where($operation,['id_pedido'=>$_POST['pedido']]);
        $operation->run();


        $operation= new \concreteComponents\update($this->model);
        $operation= new \concreteDecorators\set($operation,[
            'observaciones'=>$_POST['observaciones'],
            'destino'=>$_POST['Destino']

        ]);

        $operation= new \concreteDecorators\where($operation,['pedido_id_pedido'=>$_POST['pedido']]);
        $operation->run();

        ob_clean();
        echo json_encode(['code'=>1,"message"=>"Actualizado exitosamente"]);
    }

    public function nuevo(){

        $modelPedido=new \app\controller\pedido();

        $operation= new \concreteComponents\insert($modelPedido->getModel(),
        [

            'estado_pedido_estado'=>1,
            'entrada_salida'=>'S'

        ]);
        $operation->run();

        $operation= new \concreteComponents\select($modelPedido->getModel());
        $operation= new \concreteDecorators\columns($operation,[
            'id_pedido'=>'id'
            // 'proveedor_id_proveedor'=>'Proveedor'

        ]);
        $operation= new \concreteDecorators\orderby($operation,['id_pedido'],"DESC");
        $operation= new \concreteDecorators\limit($operation,1);
        $operation->run();
        $pedido=$modelPedido->getModel()->data[0]['id'];

        // CREATION OF PEDIDO_ENTRADA
        $operation= new \concreteComponents\insert($this->model,[
            'pedido_id_pedido'=>$pedido
        ]);


        $operation->run();
        ob_clean();
        echo json_encode(['code'=>1,"message"=>$pedido]);



    }

}

?>