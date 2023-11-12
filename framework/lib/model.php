<?php
namespace  framework\lib;

class Model extends conn {
    public $data=[];


public function callStoredProcedure($parameters=null, $sql){

    $this->prepararSentencia($sql,$parameters );

    $this->data=$this->stmt->fetchAll();

}


public function delete($query,$filtros=null){



    $this->prepararSentencia($query,$filtros);

}
public function insert($query,$filtros){
    // $query.=$formatear->insert($filtros);
    // $query.=" )";




    $this->prepararSentencia($query,$filtros);
    $this->data=$this->stmt;


}


public function listar($query,$filtros){

    $this->prepararSentencia($query,$filtros);

    if($this->stmt){
        $this->data=$this->stmt->fetchAll();


    }

}
function actualizar($query,$filtros){

    $this->prepararSentencia($query,$filtros);
    if($this->stmt){
        $this->response=$this->stmt;
    }
    }


}

?>