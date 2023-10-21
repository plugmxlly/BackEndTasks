<?php

class Cat2
{
    private $name;
    private $color;
    public $weight;

    public function __construct(string $name, string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function sayHello()
    {
        echo 'Привет! Меня зовут ' . $this->name . ', Мой цвет: ' . $this->color;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color)
    {
 
       $this->color = $color;
    }
}

$cat1 = new Cat2('Снежок', 'Серый');
echo $cat1->sayHello();
echo '<br>';
echo $cat1->getColor();
$cat1->setColor('Оранжевый');
echo '<br>';
echo $cat1->getColor();

echo '<br>';

$cat2 = new Cat2('Снежок', 'Белый');
$cat3 = new Cat2('Барсик', 'Рыжий');
echo $cat2->sayHello();

echo '<br>';

echo $cat3->sayHello();
