<?php

namespace app\controller;

class Routes extends \framework\lib\controller{
    public function __construct(){
        parent::__construct('routes_m');



    }
    public function listar(){
        // parent::authenticate();
        $operation=new \concreteComponents\select($this->model);
        $operation=new \concreteDecorators\columns($operation,[
            'id_routes'=>'Id',
            'module'=>'modulo',
            'routes_name'=>'url',
            'icono'=>'icono'
        ]);
        $operation=new \concreteDecorators\inner($operation,"privilegies",
        ['id_rol_pr'=>'rol']);
        $operation=new \concreteDecorators\where($operation,['id_rol_pr'=>$_POST['rol'],'esModulo'=>1]);
        $operation->run();
        ob_clean();
        echo json_encode(['code'=>1,"message"=>$this->model->data]);
    }

    public function usuarioRuta($ruta){
        $operation=new \concreteComponents\select($this->model);
        $operation=new \concreteDecorators\columns($operation,[
            'id_routes'=>'Id',
            'module'=>'modulo',
            'routes_name'=>'url'
        ]);
        $operation=new \concreteDecorators\inner($operation,"privilegies",
        ['id_rol_pr'=>'rol']);
        $operation=new \concreteDecorators\where($operation,['id_rol_pr'=>$_POST['acceso'], 'routes_name'=>$ruta]);
        $operation->run();
        unset($_POST['acceso']);
        if (empty($this->model->data) || !isset($this->model->data)){
            return false;
        }
        return true;
    }

    public function AllList(){
        $operation=new \concreteComponents\select($this->model);
        $operation=new \concreteDecorators\columns($operation,[
            'id_routes'=>'Id',
            'module'=>'modulo',
            'routes_name'=>'url',
            'descripcion'=>'desc'
        ]);
        $operation->run();
        ob_clean();
        echo json_encode(['code'=>1,"message"=>$this->model->data]);

    }

    function modificar($registro){
        $operation=new \concreteComponents\update($this->model);
        $operation=new \concreteDecorators\set($operation,$registro);

        $operation=new \concreteDecorators\where($operation,['routes_name'=>$registro['routes_name']]);
        $operation->run();
    }
    function nuevo($registro){
        $operation=new \concreteComponents\insert($this->model,$registro);
        $operation->run();
    }


    public function insertarActualizar($rutas=null){
        if (isset($rutas)){
            $registro=$rutas;
        }
        else{
            $registro=$_POST;
        }
        $operation= new \concreteComponents\select($this->model);
        $operation= new \concreteDecorators\columns($operation,[
            'id_routes'=>'Id',
        ]);
        $operation= new \concreteDecorators\where($operation,['routes_name'=>$registro['routes_name']]);
        $operation->run();

        if(empty($this->model->data)){
            $this->nuevo($registro);
        }
        else{
            $this->modificar($registro);
        }

        

        ob_clean();
        echo json_encode(['code'=>1,"message"=>"Se insertó exitosamente"]);


     }

     public function borrar($id=null){

        if ($id){
            $operation=new \concreteComponents\select($this->model);
            $operation=new \concreteDecorators\all($operation);
            $operation=new \concreteDecorators\where($operation,['routes_name'=>$id]);
            $operation->run();

            if (empty($this->model->data)){
                ob_clean();
                echo json_encode(['code'=>0,"message"=>"No se encontro ningun registro"]);
            }
            else{
                $operation=new \concreteComponents\delete($this->model);
                $operation=new \concreteDecorators\where($operation,['routes_name'=>$id]);
                $operation->run();
                ob_clean();
                echo json_encode(['code'=>1,"message"=>"Borrado exitosamente"]);

            }
        }
     }

}

?>