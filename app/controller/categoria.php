<?php
namespace app\controller;
 class categoria extends \framework\lib\controller{
    public function __construct(){
        parent::__construct('categoria_m');



    }
    public function listar(){
       $operation=new \concreteComponents\select($this->model);
       $operation=new \concreteDecorators\columns($operation,[
           'id_categoria'=>'Id',
           'categoria'=>'Categoria',
           'descripcion'=>'Descripcion',
       ]);

       $operation->run();
       ob_clean();
       echo json_encode(['code'=>1,"message"=>$this->model->data]);
        }

   public function modificar(){
       $operation=new \concreteComponents\update($this->model);
       $operation=new \concreteDecorators\set($operation,$_POST);

       $operation=new \concreteDecorators\where($operation,['id_categoria'=>$_POST['id_categoria']]);
       $operation->run();

   }

   function insertarActualizar(){
       $operation= new \concreteComponents\select($this->model);
       $operation= new \concreteDecorators\columns($operation,[
           'id_categoria'=>'Id',


       ]);
       $operation= new \concreteDecorators\where($operation,['id_categoria'=>$_POST['id_categoria']]);
       $operation->run();
       if(empty($this->model->data)){
           $this->nuevo();
       }
       else{
           $this->modificar();
       }

       ob_clean();
       echo json_encode(['code'=>1,"message"=>"Se insertó exitosamente"]);

   }







   public function nuevo(){


    //    unset($_POST['id_categoria']);
       $operation=new \concreteComponents\insert($this->model,$_POST);
       $operation->run();


    }


   function borrar(){
    $operation=new \concreteComponents\select($this->model);
    $operation=new \concreteDecorators\all($operation);
    $operation=new \concreteDecorators\where($operation,['id_categoria'=>$_POST['id_categoria']]);

    $operation->run();
    if (empty($this->model->data)){
        ob_clean();
        echo json_encode(['code'=>0,"message"=>"No se encontro ningun registro, recargue la pagina y verifique"]);
    }
    else{
        $operation=new \concreteComponents\delete($this->model);
        $operation=new \concreteDecorators\where($operation,['id_categoria'=>$_POST['id_categoria']]);
        $operation->run();
        ob_clean();
        echo json_encode(['code'=>1,"message"=>"Borrado exitosamente ::: ".$_POST['id_categoria']]);

    }


   }



 }

?>