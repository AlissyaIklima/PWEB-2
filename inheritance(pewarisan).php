<?php
class Animal {
    protected $nama;
    public function __construct($nama){
        $this->nama=$nama; 
    }
    public function getNama(){
        return $this->nama;
    }
}
class Dog extends Animal{
    public function makeSound(){
        return "wolf!";
    }
}
class Cat extends Animal{
    public function makeSound(){
        return "meong!";
    }
}
$dog = new Dog("Buddy");
echo $dog->getNama() . "liia" . $dog->makeSound();
?>