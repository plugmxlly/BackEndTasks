<?php

class A 
{
    public static function test(int $x)
    {
        return 'x = ' . $x;
    }
}

echo A::test(5);
echo '<br>';


class User
{
    private $role;
    private $name;

    public function __construct(string $role, string $name)
    {
        $this->role = $role;
        $this->name = $name;
    }

    public static function createAdmin(string $name)
    {
        return new self('admin', $name);
    }
}

$admin = User::createAdmin('Иван');
var_dump($admin);
echo '<br>';


class A1
{
    public static $x;

    public static function getX()
    {
        return self::$x;
    }
}

A1::$x = 5;
var_dump(A1::$x);

$a = new A1;
var_dump($a->getX());
var_dump($a::getX());
echo '<br>';


class Human
{
    private static $count;

    public function __construct()
    {
        self::$count++;
    }

    public static function getCount()
    {
        return self::$count;
    }
}

$human1 = new Human();
$human2 = new Human();
$human3 = new Human();
echo 'Людей уже: ' . Human::getCount();
