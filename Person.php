<?php
class Person{
    private $name;
    private $lastname;
    private $age;
    private $hp;
    private $mother;
    private $father;

    function __construct($name, $lastname, $age, $mother=null, $father=null){
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->mother = $mother;
        $this->father = $father;
        $this->hp = $hp;
    }
    function sayHi($name) {
        return "Hi $name, I'm " .$this->name;
    }
    function getLastName(){
        return $this->lastname;
    }
    function setHp($hp) {
        if($this->hp + $hp > 100) $this->hp = 100;
       else $this->hp = $this->hp + $hp;
    }
    function getHp(){
        return $this->hp;
    }
    function getName() {
        return $this->name;
    }
    function getMother() {
        return $this->mother;
    }
    function getFather() {
        return $this->father;
    }
    function getInfo() {
        return "
        <h1>О моей семье: </h1><br>"."Моё имя: ".$this->getName()."<br> Моя фамилия: ".$this->getLastName().
        "<br>Отца зовут: ".$this->getFather()->getName()."<br>Мать зовут: ".$this->getMother()->getName()."<br>
        Бабушку по маминой линии зовут: ".$this->getMother()->getMother()->getName()."<br>
        Дедушку по маминой линии зовут: ".$this->getMother()->getFather()->getName()."<br>
        Бабушку по папиной линии зовут: ".$this->getFather()->getMother()->getName()."<br>
        Дедушку по папиной линии зовут: ".$this->getFather()->getFather()->getName();
        
    }
}
$igor = new Person("Igor", "Petrov", 68);
$maks = new Person("Maksim", "Lavrov", 68);
$anya = new Person("Anna", "Lavrova", 62);
$lena = new Person("Elena", "Sidorova", 60);


$alex = new Person("Alex", "Ivanov", 42, $anya, $maks);
$olga = new Person("Olga", "Ivanova", 42, $lena, $igor);
$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);
//echo $valera->getMother()->getFather()->getName();
echo $valera->getInfo();
//$alex->name = "Alex";
//echo $alex->name;
//echo $alex->sayHi($igor->name);
//Здоровье человека не может быть более 100ед.
//$medKit = 50;
//$alex->setHp (-30);  //шел шел и упал, резко, сильно, больно
//echo $alex->hp."<br>";
//echo $alex->getHp() . "<br>";
//$alex->hp = $alex->hp + $medKit; //Нашел аптечку
//$alex->setHp($medKit);
//echo $alex->getHp();
?>