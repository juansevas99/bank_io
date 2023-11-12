<?php
namespace  framework\lib;





class controller {
    protected $model;
    public function __construct($model)

    // llama al modelo asociado con el controlador
    // inicializa una vista
    //

    {
       

        $model="\\app\\model\\".$model;
        
        $this->model=new $model();
        
        
        

    }

    public function getModel(){
        return $this->model;
    }

    // protected function authenticate()
    // {


    //     $modelUser=new \app\model\user_m();
    //     $operation= new \concreteComponents\select($modelUser);
    //     $operation= new \concreteDecorators\columns($operation,[
    //         'id_user'=>'COD'

    //     ]);
    //     $operation=new \concreteDecorators\where($operation,['email'=>$_POST['correo'], "token"=>$_POST['token']]);

    //     $operation->run();

    //     if (empty($modelUser->data) || !isset($modelUser->data)){
    //         ob_clean();
    //         echo json_encode(['code'=>0,"message"=>"Usuario no autenticado, inicie sesion de nuevo"]);
    //         exit();
    //     }
    // }


}
?>