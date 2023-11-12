<?php

namespace concreteComponents;
class select extends \ framework\querybuilder\operation {
    private $table;
    function __construct(\ framework\lib\model $model=null)
    {
        $this->model=$model;
        $this->function="select";
        $this->mainOperation="select";
        $this->table=$this->model->table;
        
        parent::__construct();
    }
    
    public function concatenate(): string
    {
        // $this->currentStringQuery=$this->function;
        // $this->queryString=$this->currentStringQuery;
        return $this->queryString;
    }
    public function run(){

    }
}

?>