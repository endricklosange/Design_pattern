<?php
interface Animal
{
    public function talk();
}

class Cat implements Animal
{
    public function talk()
    {
        echo "Miaou !";
    }
}
class Dog implements Animal
{
    public function talk()
    {
        echo "Ouaf !";
    }
}

$dog1 = new Dog();
$dog1->talk();

$cat1 = new Cat();
$cat1->talk();
