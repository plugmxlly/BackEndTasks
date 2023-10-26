<?php

class A
{
    public function sayHello(): string
    {
        return 'Hello, I am A';
    }
}

$a = new A();
var_dump($a instanceof A);

class B extends A
{
    public function sayHello(): string
    {
        return parent::sayHello() . '. It was joke, I am B :)';
    }
}

$b = new B();
var_dump($b instanceof B);
var_dump($b instanceof A);
var_dump($a instanceof B);
echo '<br>';
echo $b->sayHello();




class A1
{
    public function method1(): string
    {
        return $this->method2();
    }

    protected function method2(): string
    {
        return 'A';
    }
}

class B1 extends A1
{
    protected function method2(): string
    {
        return 'B';
    }
}

$b = new B1();

echo $b->method1();