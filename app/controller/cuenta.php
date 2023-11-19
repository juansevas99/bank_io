<?php
namespace app\controller;
 class producto extends \framework\lib\controller{
     public function __construct(){
         parent::__construct('cuenta_m');



     }


    public function listar(){
        $operation= new \concreteComponents\select($this->model);
        $operation= new \concreteDecorators\columns($operation,[
            'id_producto'=>'Id',
            'nombre_producto'=>'nombre',
            'tasa_interes_producto' => 'tasa',
           'tipo_producto' => 'tipo',
        ]);
        


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
        // var_dump($_POST);
        // exit();
        $operation= new \concreteComponents\select($this->model);
        $operation= new \concreteDecorators\all($operation);
        $operation= new \concreteDecorators\where($operation,['id_producto'=>$_POST['id_producto']]);
        $operation->run();
        if(empty($this->model->data)){
            $this->nuevo();
        }
        else{

            $this->modificar();
        }

        ob_clean();
        echo json_encode(['code'=>1,"message"=>"Se actualizó exitosamente"]);



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