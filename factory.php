<?php
interface Animal {
    public function adopt($owner);
}
class Cat implements Animal {
    public function adopt($owner) {
    }
}

class Dog implements Animal {
    public function adopt($owner) {
    }
}
class AnimalFactory {
    public function createAnimal($animalType) {
        switch ($animalType) {
            case 'cat':
                return new Cat();
            case 'dog':
                return new Dog();
            default:
                throw new Exception('Invalid animal type');
        }
    }
}
$animalFactory = new AnimalFactory();
$cat = $animalFactory->createAnimal('cat');
$cat->adopt('John');
