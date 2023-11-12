<?php

namespace app\controller;

 class Privilegies extends \framework\lib\controller{
     public function __construct(){
         parent::__construct('privilegies_m');



     }

     public function insertarActualizar(){
        $operation= new \concreteComponents\select($this->model);
        $operation= new \concreteDecorators\columns($operation,[
            'roles_Id_rol'=>'Id',
        ]);
        $operation= new \concreteDecorators\where($operation,$_POST);
        $operation->run();

        if(empty($this->model->data)){
            $this->nuevo($registro);
        }





        ob_clean();
        echo json_encode(['code'=>1,"message"=>"Se insertó exitosamente"]);


     }
     function nuevo(){
        $operation=new \concreteComponents\insert($this->model,$_POST);
        $operation->run();
    }

    function borrar(){
        $operation= new \concreteComponents\select($this->model);
        $operation= new \concreteDecorators\columns($operation,[
            'roles_Id_rol'=>'Id',
        ]);
        $operation= new \concreteDecorators\where($operation,['roles_Id_rol'=>$_GET['id']]);
        $operation->run();
        if (empty($this->model->data)){
            ob_clean();
            echo json_encode(['code'=>0,"message"=>"No se encontro ningun registro"]);
        }
        else{
            $operation=new \concreteComponents\delete($this->model);
            $operation=new \concreteDecorators\where($operation,['roles_Id_rol'=>$_GET['id']]);
            $operation->run();

            ob_clean();
            echo json_encode(['code'=>1,"message"=>"Se borro exitosamente"]);
        }



    }


}