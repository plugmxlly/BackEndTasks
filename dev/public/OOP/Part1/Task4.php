<?php

interface calculateSquare
{
    public function calculateSquare(): float;
}

class Rectangle 
{
    private float $x;
    private float $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function calculateSquare() : float
    {
        return $this->x * $this->y;
    }
}

class Square implements calculateSquare
{
    private float $x;

    public function __construct(float $x)
    {
        $this->x = $x;
    }

    public function calculateSquare(): float
    {
        return $this->x ** 2;
    }
}

class Circle implements calculateSquare
{
    const PI = 3.1416;
    private float $r;

    public function __construct(float $r)
    {
        $this->r = $r;
    }

    public function calculateSquare(): float
    {
        return self::PI * ($this->r ** 2);
    }
}

$objects = [new Square(5), new Rectangle(2, 4), new Circle(5)];
foreach ($objects as $object)
{
    if ($object instanceof calculateSquare)
    {
        echo 'Объект реализует интерфейс CalculateSquare. Площадь: ' , $object->calculateSquare();
        echo ' * * * ';
        echo 'Это объект класса ' . get_class($object);
        echo '<br>';
    }

    else
    {
        echo 'Объект класса ' . get_class($object) . ' не реализует интерфейс CalculateSquare.';
        echo '<br>';
    }
}