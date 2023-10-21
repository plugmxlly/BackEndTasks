<?php

class Cat2
{
    private $name;
    public $color;
    public $weight;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello()
    {
        echo 'Привет! Меня зовут ' . $this->name . '.';
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

$cat1 = new Cat2('Снежок');
echo $cat1->getName();

