<?php
namespace app\controller;

class usuario extends \framework\lib\controller
{


    function __construct()
    {
        parent::__construct("user_m");
    }
    public function cerrarSesion(){
        $token=random_int(0,99999999);

        $operation= new \concreteComponents\update($this->model);
        $operation= new \concreteDecorators\set($operation,['token'=>$token]);

        $operation= new \concreteDecorators\where($operation,['email'=>$_POST['correo']]);
        $operation->run();
        ob_clean();
        echo json_encode(['code'=>1,"message"=>"Cesion cerrada exitosamente"]);

    }
    public function validarSession(){
        $operation= new \concreteComponents\select($this->model);
        $operation= new \concreteDecorators\columns($operation,[
            'id_user'=>'COD'

        ]);
        $operation=new \concreteDecorators\where($operation,['email'=>$_POST['correo'], "token"=>$_POST['token']]);

        $operation->run();

        if (empty($this->model->data) || !isset($this->model->data)){
            ob_clean();
            echo json_encode(['code'=>0,"message"=>"Usuario no autenticado, inicie sesion de nuevo"]);
            exit();
        }
    }
    public function report()
    {

        





        // parent::authenticate();
        $operation= new \concreteComponents\select($this->model);
        $operation= new \concreteDecorators\columns($operation,[
            'id_usuario'=>'COD',
            'documento_usuario'=>'Identificacion',
            'tipo_documento_usuario'=>'TIPO',
            'nombre_usuario'=>'Usuario',
            'tipo_usuario_id_tipo_usuario'=>'TT',
            

        ]);
        $operation= new \concreteDecorators\inner($operation,"tipo_usuario",
        ['descripcion_usuario'=>'tipo_usuario']);
        $operation->run();

        ob_clean();
        echo json_encode(['code'=>1,"message"=>$this->model->data]);
    }


    public function login()
    {


        $operation= new \concreteComponents\select($this->model);
        $operation= new \concreteDecorators\columns($operation,[
            'id_user'=>'COD',
            'email'=>'Correo',
            'contact_number'=>'Contacto',
            'user_name'=>'Usuario',
            'password'=>'pass'

        ]);
        $operation= new \concreteDecorators\inner($operation,"roles",
        ['id_rol'=>'rol']);
        $operation=new \concreteDecorators\where($operation,['email'=>$_POST['email'], "password"=>$_POST['password']]);

        $operation->run();



        if (isset($this->model->data) && !empty($this->model->data)) {
            $operation= new \concreteComponents\select($this->model);
            $operation= new \concreteDecorators\columns($operation,[
                'token'=>'token',
                'email'=>'correo',
                'user_name'=>'usuario'


            ]);
            $operation= new \concreteDecorators\inner($operation,"roles",
            ['id_rol'=>'rol', 'rol_name'=>'rol_name']);
            $operation=new \concreteDecorators\where($operation,['email'=>$_POST['email'], "password"=>$_POST['password']]);

            $operation->run();
            

            ob_clean();
            echo json_encode(['code'=>1,"message"=>$this->model->data]);




        }
        else{

            ob_clean();
            echo json_encode(['code'=>0,"message"=>"Credenciales incorrectas, verifique"]);

        }


    }

    public function insertarActualizar(){

        $operation= new \concreteComponents\select($this->model);
        $operation= new \concreteDecorators\columns($operation,[
            'email'=>'email',
        ]);
        $operation= new \concreteDecorators\where($operation,['email'=>$_POST['email']]);
        $operation->run();  

        if(empty($this->model->data)){
            $this->nuevo($_POST);
        }
        else{
            $this->modificar();
        }




        ob_clean();
        echo json_encode(['code'=>1,"message"=>"Se insertó exitosamente"]);


     }


    public function modificar(){
            $operation= new \concreteComponents\update($this->model);
            $operation= new \concreteDecorators\set($operation,$_POST);

            $operation= new \concreteDecorators\where($operation,['email'=>$_POST['email']]);
            $operation->run();

    }





    public function nuevo(){
        $_POST['token']=random_int(0,99999999);
        $operation=new \concreteComponents\insert($this->model,$_POST);
        $operation->run();



     }

     function borrar(){
        $operation=new \concreteComponents\select($this->model);
        $operation=new \concreteDecorators\all($operation);
        $operation=new \concreteDecorators\where($operation,['id_user'=>$_POST['id_user']]);

        $operation->run();
        if (empty($this->model->data)){
            ob_clean();
            echo json_encode(['code'=>0,"message"=>"No se encontro ningun registro"]);
        }
        else{
            $operation=new \concreteComponents\delete($this->model);
            $operation=new \concreteDecorators\where($operation,['id_user'=>$_POST['id_user']]);
            $operation->run();
            ob_clean();
            echo json_encode(['code'=>1,"message"=>"Borrado exitosamente ::: Usuario # ".$_POST['id_user']]);

        }



    }
}