<?php
namespace concreteDecorators;
class inner extends \ framework\querybuilder\aggregation{
    public function __construct(\ framework\querybuilder\operation $operation,$table,$fields=[])
    {   
        $this->function="left join";
       
        if ($operation->function=="*" || $operation->function=="column" || $operation->function=="left join"){
            parent:: __construct($operation);
            $this->innerTable=$this->model($table);
            $this->parametersSelect=$fields;
            $this->validateFields($this->parametersSelect);

        }
        else {
            echo "The SQl strutucture is wrong at ".$this->function." function.";
            exit();
        }
        
        
    }
    public function concatenate(): string
    {
       
        $this->currentStringQuery=$this->function." ".$this->innerTable->table. " on ".$this->model->table.".".$this->model->manyToOne[$this->innerTable->table][0]." = ".$this->innerTable->table.".".$this->model->manyToOne[$this->innerTable->table][1];
        
        return $this->operation->concatenate()." ".$this->currentStringQuery;
    //    echo $this->operation->concatenate()." ".$this->currentStringQuery;
    //    exit();
    }
    private function validateFields(){
        if ($this->parametersSelect)
        {


            $columns=array_map(function($keys,$valores){
                return $keys." as '".$valores."'";
            },array_keys($this->parametersSelect),array_values($this->parametersSelect));
            
            
            $this->parametersSelectQuery=$this->operation->parametersSelectQuery.", ".implode(",",$columns);
            
           
            // sreturn $this->operation->concatenate()." from ".$this->operation->model->table;
        }
        else{
            return "";
        }
    }

    private function model($table){
       $table=$table."_m";
       $table="\app\\model\\".$table;    
        $model= new $table;
            
   
                return $model;
        }

    
        
       
            

        
    
    
}

?>