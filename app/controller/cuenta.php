<?php
namespace app\controller;
 class cuenta extends \framework\lib\controller{
     public function __construct(){
         parent::__construct('cuenta_m');



     }


    public function lista(){
        $operation= new \concreteComponents\select($this->model);
        $operation= new \concreteDecorators\columns($operation,[
            'id_cuenta'=>'COD',
            'saldo_cuenta'=>'saldo',
            'usuario_id_usuario' => 'codUsuario',
           'producto_id_producto' => 'codProducto',
        ]);
        $operation= new \concreteDecorators\inner($operation,"producto",
        ['nombre_producto'=>'producto']);
        $operation= new \concreteDecorators\inner($operation,"user",
        ['nombre_usuario'=>'usuario']);
        $operation=new \concreteDecorators\where($operation,['usuario_id_usuario'=>$_GET['id']]);


        $operation->run();
        ob_clean();
        echo json_encode(['code'=>1,"message"=>$this->model->data]);
    }
    public function modificar(){

        $operation=new \concreteComponents\update($this->model);
        $operation=new \concreteDecorators\set($operation,$_POST);

        $operation=new \concreteDecorators\where($operation,['id_producto'=>$_POST['id_producto']]);
        $operation->run();

    }


    function insertarActualizar(){
        
        
        $this->nuevo();
        

        ob_clean();
        echo json_encode(['code'=>1,"message"=>"Se creo exitosamente"]);



    }

    public function nuevo(){


        $operation=new \concreteComponents\insert($this->model,$_POST);
        $operation->run();



     }
     function borrar(){

        $operation= new \concreteComponents\select($this->model);
        $operation= new \concreteDecorators\all($operation);
        $operation=new \concreteDecorators\where($operation,['id_producto'=>$_POST['id_producto']]);



        $operation->run();
        if (empty($this->model->data)){
            ob_clean();
            echo json_encode(['code'=>0,"message"=>"No se encontro ningun registro"]);
        }
        else{
            $operation=new \concreteComponents\delete($this->model);
            $operation=new \concreteDecorators\where($operation,['id_producto'=>$_POST['id_producto']]);
            $operation->run();
            ob_clean();
            echo json_encode(['code'=>1,"message"=>"Borrado exitosamente ::: Producto # ".$_POST['id_producto']]);
        }


    }


 }

?>