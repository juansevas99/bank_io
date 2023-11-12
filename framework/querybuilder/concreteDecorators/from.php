<?php
namespace concreteDecorators;
class from extends \ framework\querybuilder\aggregation{
    public function __construct(\ framework\querybuilder\operation $operation)
    {
        parent:: __construct($operation);
        
    }
    public function concatenate(): string
    {
       return parent::concatenate();
    }
    public function run(){

    }
    
}

?>