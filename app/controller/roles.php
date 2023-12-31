<?php
namespace app\controller;

class roles extends \framework\lib\controller
{


    function __construct()
    {
        parent::__construct("roles_m");
    }
    public function listar()
    {
        $operation= new \concreteComponents\select($this->model);
        $operation= new \concreteDecorators\columns($operation,[
            'Id_rol'=>'Id',
            'rol_name'=>'Rol',
            'description'=>'Descripcion'


        ]);

        $operation->run();
        ob_clean();
        echo json_encode(['code'=>1,"message"=>$this->model->data]);
    }




    public function borrar(){
        $operation=new \concreteComponents\select($this->model);
        $operation=new \concreteDecorators\all($operation);
        $operation=new \concreteDecorators\where($operation,['Id_rol'=>$_POST['id_rol']]);
        $operation->run();
        if (empty($this->model->data)){
            ob_clean();
            echo json_encode(['code'=>0,"message"=>"No se encontro ningun registro"]);
        }
        else{
            $operation=new \concreteComponents\delete($this->model);
            $operation=new \concreteDecorators\where($operation,['Id_rol'=>$_POST['id_rol']]);
            $operation->run();
            ob_clean();
            echo json_encode(['code'=>1,"message"=>"Borrado exitosamente :: Rol # ".$_POST['id_rol']]);

        }

    }

    public function nuevo(){
        unset($_POST['Id_rol']);
        $operation=new \concreteComponents\insert($this->model,$_POST);
        $operation->run();
        ob_clean();

        echo json_encode(['code'=>1,"message"=>"Se insertó exitosamente"]);
    }
    public function insertarActualizar(){

        $operation= new \concreteComponents\select($this->model);
        $operation= new \concreteDecorators\columns($operation,[
            'Id_rol'=>'Id',
        ]);
        $operation= new \concreteDecorators\where($operation,['Id_rol'=>$_POST['Id_rol']]);
        $operation->run();

        if(empty($this->model->data)){
            $this->nuevo($_POST);
        }
        else{
            $this->modificar();
        }




        ob_clean();
        echo json_encode(['code'=>1,"message"=>"Se modifico exitosamente"]);


    }



    public function modificar(){

        $operation= new \concreteComponents\update($this->model);
        $operation= new \concreteDecorators\set($operation,$_POST);

        $operation= new \concreteDecorators\where($operation,['id_rol'=>$_POST['Id_rol']]);
        $operation->run();

}

}