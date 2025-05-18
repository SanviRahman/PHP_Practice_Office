<?php
    class ParentClass
    {
        public $fatherName;
        private $sonName;


        public function __construct($fatherName,$sonName)
        {
            $this->fatherName=$fatherName;
            $this->sonName=$sonName;
            echo  $this->sonName .PHP_EOL;
        }
    }
    
    $p1= new ParentClass("Shanto","Shahidur Rahman");
    echo $p1->fatherName;

?>