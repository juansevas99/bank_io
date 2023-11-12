<?php

namespace concreteDecorators;
class orderby extends \ framework\querybuilder\aggregation{
    public function __construct(\ framework\querybuilder\operation $operation, $parameters=null, $order="")
    {
        $this->function="order by";
        if ($operation->function=="select" || $operation->function=="where" ||  $operation->function=="from" ||$operation->function=="column" || $operation->function=="group by" || $operation->function=="left join")
        {
            parent:: __construct($operation);
            
            $this->parameters=$parameters;
            $this->order=$order;
            // $this->filtros=$operation->filtros;
            // $this->model=$operation->model;
        
        }
        else {
            echo "The SQL structure here at where order by is wrong. Verify and try again!";
            exit();
        }
        
    }
    public function concatenate(): string
    {
        if ($this->parameters)
        {
            $this->currentStringQuery=$this->function." ".implode(",",$this->parameters). " " .$this->order;
            return $this->operation->concatenate()." ".$this->currentStringQuery;
        }
        else{
            return "";
        }
        
    }
    // public function run(){

    // }
    
}

?>