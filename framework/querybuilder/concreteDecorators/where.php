<?php
namespace concreteDecorators;
class where extends \ framework\querybuilder\aggregation{
    public function __construct(\ framework\querybuilder\operation $operation,$parameters=null)
    {


        if ($operation->function=="column" || $operation->function=="*"
        || $operation->function=="set" || $operation->function=="delete" || $operation->function=="left join")
        {
            parent:: __construct($operation);
            $this->function="where";
            $this->parameters=$parameters;
            $this->filtros=$parameters;

            // $this->model=$operation->model;


        }
        else{
            echo "The SQL structure here at where clausure is wrong. Verify and try again!";
            exit();
        }

    }
    public function concatenate(): string
    {

        if (!empty($this->parameters) && isset($this->parameters)){

            // var_dump ($this->parameters);
            // exit();
            $where="";
            $i=0;
            foreach ($this->parameters as $key => $value) {
                if(isset($value)){

                    if($i==0){
                        $where.=$key."= :".$key;
                    }
                    else{
                        $where.=" and ".$key."= :".$key;
                    }
                    $i++;
                }
            }
            $this->currentStringQuery=$this->function." ".$where;

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