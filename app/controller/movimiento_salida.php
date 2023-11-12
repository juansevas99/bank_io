<?php
namespace app\controller;
class movimiento_salida extends \framework\lib\controller{
    public function __construct(){
        parent::__construct('movimiento_salida_m');



    }





    public function listar(){


        $operation=new \concreteComponents\select($this->model);
        $operation=new \concreteDecorators\columns($operation,[

            'pedido_salida_pedido_id_pedido'=>'Pedido',
            'observaciones'=>'observaciones'
        ]);
        $operation=new \concreteDecorators\inner($operation,"movimiento",
        [
        'id_movimiento'=>'Movimiento',
        'cantidad'=>'Cantidad',
        'precio_unitario'=>'Precio',
        'hecho'=>'hecho',
        'producto_id_producto'=>'ProductoCod'
        ]);

        $operation= new \concreteDecorators\where($operation,['pedido_salida_pedido_id_pedido'=>$_POST['pedido']]);
        $operation->run();
        ob_clean();
        echo json_encode(['code'=>1,"message"=>$this->model->data]);




    }


    function insertarActualizar(){

        $operation=new \concreteComponents\select($this->model);
        $operation=new \concreteDecorators\columns($operation,[
            'pedido_salida_pedido_id_pedido'=>'Pedido',
        ]);
        $operation=new \concreteDecorators\inner($operation,"movimiento",
        [
        'id_movimiento'=>'Movimiento',
        'producto_id_producto'=>'producto_id_producto'
        ]);



        $operation= new \concreteDecorators\where($operation,['pedido_salida_pedido_id_pedido'=>$_POST['pedido'],'producto_id_producto'=>$_POST['producto_id_producto']]);

        $operation->run();



        $productos=$this->model->data;


            if(!isset($_POST['Movimiento']) && empty($_POST['Movimiento'])){



                if (!empty($productos)){
                    ob_clean();
                    echo json_encode(['code'=>0,"message"=>"Verifique la lista de items en el pedido, debe ser que ya hay uno con el mismo producto, debe cambiarlo"]);
                }
                else{

                    $this->nuevo();
                }
            }
            else{

                $operation=new \concreteComponents\select($this->model);
                $operation=new \concreteDecorators\columns($operation,[
                    'pedido_salida_pedido_id_pedido'=>'Pedido',
                ]);
                $operation=new \concreteDecorators\inner($operation,"movimiento",
                [
                'producto_id_producto'=>'Id'
                ]);



                $operation= new \concreteDecorators\where($operation,['id_movimiento'=>$_POST['Movimiento']]);

                $operation->run();

                $producto=$this->model->data[0]['Id'];


                if (!empty($productos) && ($producto!=$_POST['producto_id_producto'])){
                    ob_clean();
                    echo json_encode(['code'=>0,"message"=>"Verifique la lista de items en el pedido, debe ser que ya hay uno con el mismo producto, debe cambiarlo"]);
                }
                else{


                $this->modificar();
                }
            }







    }


    public function nuevo(){

        // Creation of movimiento
        $modelMovimiento=new \app\controller\movimiento();

        $operation=new \concreteComponents\insert($modelMovimiento->getModel(),
        [
            'producto_id_producto'=>$_POST['producto_id_producto'],
            'cantidad'=>$_POST['cantidad'],
            'hecho'=>$_POST['hecho'],
            'estado_id_estado'=>1
        ]);
        $operation->run();


        // I gets  the last mmovement just created

        $operation=new \concreteComponents\select($modelMovimiento->getModel());
        $operation=new \concreteDecorators\columns($operation,[
            'id_movimiento'=>'id'
        ]);
        $operation=new \concreteDecorators\orderby($operation,['id_movimiento'],"DESC");
        $operation=new \concreteDecorators\limit($operation,1);
        $operation->run();
        $movimiento=$modelMovimiento->getModel()->data[0]['id'];

        // it gest the last record of 'pedido ' table just created



        // CREATION OF entrada
        $operation=new \concreteComponents\insert($this->model,[
            'observaciones'=>$_POST['observaciones'],
            'pedido_salida_pedido_id_pedido'=>$_POST['pedido'],
            'movimiento_id_movimiento'=>$movimiento
        ]);


        $operation->run();

        ob_clean();
        echo json_encode(['code'=>1,"message"=>$movimiento]);

    }


    public function modificar(){
        $modelMovimiento=new \app\controller\movimiento();

        $operation= new \concreteComponents\update($modelMovimiento->getModel());
        $operation= new \concreteDecorators\set($operation,[
        'producto_id_producto'=>$_POST['producto_id_producto'],
        'cantidad'=>$_POST['cantidad'],
        'hecho'=>$_POST['hecho'],
        'estado_id_estado'=>1
        ]
        );
        $operation= new \concreteDecorators\where ($operation, ['id_movimiento'=>$_POST['Movimiento']] );

        $operation->run();

        $operation= new \concreteComponents\update($this->model);
        $operation= new \concreteDecorators\set($operation,
        [
            'observaciones'=>$_POST['observaciones'],
            'pedido_salida_pedido_id_pedido'=>$_POST['pedido'],
            'stock'=>$_POST['stock'],
        ]
    );

        $operation= new \concreteDecorators\where ($operation, ['movimiento_id_movimiento'=>$_POST['Movimiento']] );
        $operation->run();
        ob_clean();
        echo json_encode(['code'=>1,"message"=>$_POST['Movimiento']]);


    }


    public function borrar(){
        $model=new \app\controller\movimiento();

        $operation=new \concreteComponents\select($this->model);
        $operation=new \concreteDecorators\all($operation);
        $operation= new \concreteDecorators\inner($operation,"movimiento");
        $operation=new \concreteDecorators\where($operation,['id_pedido'=>$_GET['id']]);

        $operation->run();
        if (empty($this->model->data)){
            ob_clean();
            echo json_encode(['code'=>0,"message"=>"No se encontro ningun registro"]);
        }
        else{
            $operation=new \concreteComponents\delete($model);
            $operation=new \concreteDecorators\where($operation,['movimiento_id_movimiento'=>$_GET['id']]);
            $operation->run();
            ob_clean();
            echo json_encode(['code'=>1,"message"=>"Borrado exitosamente"]);
        }
    }


    // public function cambiarEstado(){

    //     $this->model->callStoredProcedure(["pedido_in"=>1],'call updateStockEntrada(pedido_in:)');
    //     $this->model->data;

    // }



}

?>