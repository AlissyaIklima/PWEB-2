<?php
class printer{
    public function print(Animal $animal){
        echo $animal->getName() . "luli" . $animal->makeSound() . "<br>";
    }
}
$dog = new Dog("buki");
$cat = new Cat("cindy");

$printer = new Printer();
$printer->print($dog);
$printer->print($cat);

?>