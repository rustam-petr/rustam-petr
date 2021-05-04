<?php

declare(strict_types=1); //строгая проверка типов данных

     // чертеж, по которому создается экземпляр класса(объект)
class Person
{
    public float $age; // объявление переменных
    public string $name;

    // функция-конструктор, функция.которая выполняется при создании экземпляра класса(объекта)
    public function __construct($age, $name)
    {
        $this->age = $age;
        $this->name = $name;
    }

    public function intro(){
        return "Меня зовут $this->name, мне $this->age лет.";
    }
}

    // создается экземпляр класса(объект) Person (ключевое слово new)
$man = new Person(19, "Ivan");


//echo $man->age; // обращение к объекту и конкретному полю
//echo $man->name;
echo $man->intro();