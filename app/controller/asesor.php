<?php
namespace app\controller;

class asesor extends \framework\lib\controller
{


    function __construct()
    {
        parent::__construct("asesor_m");
    }
    public function listar()
    {
        $operation= new \concreteComponents\select($this->model);
        $operation= new \concreteDecorators\columns($operation,[
            'id_asesor'=>'Id',
            'nombre_asesor'=>'Rol',
            'documeto_asesor'=>'Descripcion',
            'ubicacion_asesor'=>'Ubicacion'

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


public function login()
    {


        $operation= new \concreteComponents\select($this->model);
        $operation= new \concreteDecorators\columns($operation,[
            'user_name'=>'Usuario',
            'password'=>'pass'
           

        ]);
        
        $operation=new \concreteDecorators\where($operation,['user_name'=>$_POST['username']]);
        
     
        $operation->run();



        if (isset($this->model->data) && !empty($this->model->data)) {
            
            ob_clean();
            echo json_encode(['code'=>1,"message"=>$this->model->data]);




        }
        else{

            ob_clean();
            echo json_encode(['code'=>0,"message"=>"Credenciales incorrectas, verifique"]);

        }


    }

}