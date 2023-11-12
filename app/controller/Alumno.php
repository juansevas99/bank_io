<?php
namespace app\controller;

class Alumno extends \framework\lib\controller
{


    function __construct()
    {
        parent::__construct("Alumno_m");
    }


    public function listar(){
        $operation=new \concreteComponents\select($this->model);
        $operation=new \concreteDecorators\columns($operation,[
            'id'=>'ID',
            'Codigo'=>'Codigo',
            'Nombres'=>'Nombres',
            'Correo'=>'Correo',
            'codigoCurso'=>'Curso',

            
        ]);
        
        $operation->run();
        echo json_encode($this->model->data);
    }

    public function actualizar(){
        $operation= new \concreteComponents\update($this->model);
        $operation= new \concreteDecorators\set($operation,$_POST);
        
        $operation= new \concreteDecorators\where($operation,['id'=>$_POST['id']]);
        $operation->run();
        
                
    }



    function formactualizar(){
        $operation= new \concreteComponents\select($this->model);
        $operation= new \concreteDecorators\columns($operation,[
            'id'=>'ID',
            'Codigo'=>'Codigo',
            'Nombres'=>'Nombres',
            'Correo'=>'Correo',
            'codigoCurso'=>'Curso',
            
        ]);
        $operation= new \concreteDecorators\where($operation,['id'=>$_GET['id']]);
        $operation->run();
        echo json_encode($this->model->data);


    }
    function insertarActualizar(){
        $operation= new \concreteComponents\select($this->model);
        $operation= new \concreteDecorators\columns($operation,[
            'id'=>'ID',
            'Codigo'=>'Codigo',
            'Nombres'=>'Nombres',
            'Correo'=>'Correo',
            'codigoCurso'=>'Curso',
            
        ]);
        $operation= new \concreteDecorators\where($operation,['id'=>$_POST['id']]);
        $operation->run();
        if(empty($this->model->data)){
            $this->nuevo();
        }
        else{
            $this->actualizar();
        }
        header('Location: http://localhost/prueba-engine/frontend/#formulario');
        
      
    }


     public function nuevo(){

        
        unset($_POST['id']);
        $operation= new \concreteComponents\insert($this->model,$_POST);
        $operation->run();
     }


    function borrar(){
        $operation= new \concreteComponents\delete($this->model);
        $operation= new \concreteDecorators\where($operation,['id'=>$_GET['id']]);
        $operation->run();
        

    }


    
  
}
