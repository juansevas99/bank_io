<?php

namespace app\controller;

 class medida extends \framework\lib\controller{
     public function __construct(){
         parent::__construct('medida_m');



     }
     public function listar(){
        $operation=new \concreteComponents\select($this->model);
        $operation=new \concreteDecorators\columns($operation,[
            'id_medida'=>'COD',
            'medida'=>'medida',
        ]);
;
        $operation->run();
        ob_clean();
            echo json_encode(['code'=>1,"message"=>$this->model->data]);
    }

    public function modificar(){
        $operation=new \concreteComponents\update($this->model);
        $operation=new \concreteDecorators\set($operation,$_POST);

        $operation=new \concreteDecorators\where($operation,['id'=>$_POST['id']]);
        $operation->run();

    }

    function insertarActualizar(){
        $operation= new \concreteComponents\select($this->model);
        $operation= new \concreteDecorators\columns($operation,[
            'id_medida'=>'Id',


        ]);
        $operation= new \concreteDecorators\where($operation,['id'=>$_POST['id']]);
        $operation->run();
        if(empty($this->model->data)){
            $this->nuevo();
        }
        else{
            $this->modificar();
        }


    }







    public function nuevo(){


        unset($_POST['id']);
        $operation=new \concreteComponents\insert($this->model,$_POST);
        $operation->run();

        echo json_encode(['code'=>1,"message"=>"Se insertó exitosamente"]);


     }


    function borrar(){
        $operation=new \concreteComponents\select($this->model);
        $operation=new \concreteDecorators\all($operation);
        $operation->run();
        if (empty($this->model->data)){
            ob_clean();
            echo json_encode(['code'=>0,"message"=>"No se encontro ningun registro"]);
        }
        else{
            $operation=new \concreteComponents\delete($this->model);
            $operation=new \concreteDecorators\where($operation,['id_medida'=>$_GET['id']]);
            $operation->run();
            ob_clean();
            echo json_encode(['code'=>1,"message"=>"Borrado exitosamente"]);

        }



    }

 }

?>