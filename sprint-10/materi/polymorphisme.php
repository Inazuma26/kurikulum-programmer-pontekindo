<?php

class Programmer {
    public string $name;

    public function __construct (string $name){
        $this->name =$name;
        echo $this->name;
    }
    function sayHello(){
        echo "Hello Parentclass" . PHP_EOL;
    }
    
}

class Backendprogrammer extends Programmer {

    public function __construct (){
        echo "Hello Constclass" . PHP_EOL;
        parent::__construct("Budi"); 
    }
    function sayHello(){
        echo "Hello Subclass" . PHP_EOL;
    }
    function getcornet(){
        return parent::sayHello();
    }
    
}
class Frontendprogrammer extends Programmer {}

class Company {
    var Programmer $programmer;
}

// $company = new Company();
// $company->programmer = new Programmer("Budi");
// $company->programmer = new Backendprogrammer("Budi");
// $company->programmer = new Frontendprogrammer("Andi");
// var_dump($company);

$programmer = new programmer("Budi");
// $programmer->sayHello();
$programmer = new Backendprogrammer();
$programmer->sayHello();
echo $programmer->getCornet();