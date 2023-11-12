<?php
namespace app\controller;

class pedido_entrada extends \framework\lib\controller{
    public function __construct(){
        parent::__construct('pedido_entrada_m');



    }


    public function listar(){


        $operation=new \concreteComponents\select($this->model);
        $operation=new \concreteDecorators\columns($operation,[
            'observaciones'=>'Observaciones',
            'pedido_id_pedido'=>'Pedido',
            'numeroFactura'=>'numeroFactura'

        ]);
        $operation= new \concreteDecorators\inner($operation,"pedido",
        [
        'estado_pedido_estado'=>'Estado',
        'fecha_creacion'=>'Creacion',
        'fecha_efectiva'=>'FechaEfectiva']);
        $operation= new \concreteDecorators\inner($operation,"proveedor",
        [
        'contacto'=>'Proveedor'
        ]);
        $operation=new \concreteDecorators\orderby($operation,['fecha_efectiva'],"DESC");


        $operation->run();
        ob_clean();
        echo json_encode(['code'=>1,"message"=>$this->model->data]);




    }

    public function listarUno(){
        $operation=new \concreteComponents\select($this->model);
        $operation=new \concreteDecorators\columns($operation,[
            'observaciones'=>'Observaciones',
            'pedido_id_pedido'=>'Pedido',
            'proveedor_id_proveedor'=>'proveedor_id',
            'numeroFactura'=>'numeroFactura',



        ]);
        $operation= new \concreteDecorators\inner($operation,"pedido",
        [
        'estado_pedido_estado'=>'Estado',
        'fecha_creacion'=>'Creacion',
        'fecha_efectiva'=>'FechaEfectiva']);
        $operation= new \concreteDecorators\inner($operation,"proveedor",
        [
        'contacto'=>'Proveedor'
        ]);
        $operation= new \concreteDecorators\where($operation,['pedido_id_pedido'=>$_POST['pedido']]);

        $operation->run();
        ob_clean();
        echo json_encode(['code'=>1,"message"=>$this->model->data]);
    }


    public function nuevo(){

        $modelPedido=new \app\controller\pedido();

        $operation= new \concreteComponents\insert($modelPedido->getModel(),
        [

            'estado_pedido_estado'=>1,
            'entrada_salida'=>'E'

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

    public function modificar(){

        $modelPedido=new \app\controller\pedido();
        $operation= new \concreteComponents\update($modelPedido->getModel());
        $operation= new \concreteDecorators\set($operation,['fecha_efectiva'=>$_POST['fecha_efectiva']]);

        $operation= new \concreteDecorators\where($operation,['id_pedido'=>$_POST['pedido']]);
        $operation->run();


        $operation= new \concreteComponents\update($this->model);
        $operation= new \concreteDecorators\set($operation,[
            'observaciones'=>$_POST['observaciones'],
            'proveedor_id_proveedor'=>$_POST['proveedor_id_proveedor'],
            'numeroFactura'=>$_POST['numeroFactura']

        ]);

        $operation= new \concreteDecorators\where($operation,['pedido_id_pedido'=>$_POST['pedido']]);
        $operation->run();

        ob_clean();
        echo json_encode(['code'=>1,"message"=>"Actualizado exitosamente"]);
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
            $operation=new \concreteDecorators\where($operation,['id_movimiento'=>$_GET['id']]);
            $operation->run();
            ob_clean();
            echo json_encode(['code'=>1,"message"=>"Borrado exitosamente"]);

        }



    }


    public function cambiarEstado(){

        $this->model->callStoredProcedure(["pedido_in"=>$_POST['pedido']],'call updateStockEntrada(:pedido_in)');

        ob_clean();
        echo json_encode(['code'=>1,"message"=>$this->model->data]);
    }

}

?>