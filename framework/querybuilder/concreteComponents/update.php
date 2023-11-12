<?php

namespace concreteComponents;
class update extends \ framework\querybuilder\operation  {
    function __construct(\ framework\lib\model $model)
    {
        $this->model=$model;
        $this->function="update";
        $this->table=$this->model->table;
        $this->mainOperation="update";
        parent::__construct();
        
    }
    public function concatenate(): string
    {
        return $this->function." ".$this->model->table;
    }
    public function run(){

    }
}

?>