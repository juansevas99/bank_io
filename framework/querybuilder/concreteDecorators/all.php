<?php


namespace concreteDecorators;
class all extends \framework\querybuilder\aggregation {
    function __construct(\framework\querybuilder\operation $operation)
    {
        $this->function="*";
        if ($operation->function=="select")
        {
            parent::__construct($operation);
        }
        else {
            echo "Sql structure is wrong at '".$this->function."'";
            exit();
        }
    }
    
    public function concatenate(): string
    {
        $this->currentStringQuery.=$this->function." from ".$this->operation->model->table;
        $this->queryString=$this->operation->concatenate()." ".$this->currentStringQuery;
        return $this->queryString;
    }
   
}

?>