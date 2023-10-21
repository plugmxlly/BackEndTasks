<?php

abstract class AbstractClass
{
    abstract public function getValue();

    public function printValue()
    {
        echo 'Значение: ' . $this->getValue();
    }
}

class ClassA extends AbstractClass
{
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}

$objectA = new ClassA('kek');
$objectA->printValue();


echo '<br>';


abstract class HumanAbstract
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    abstract public function getGreetings(): string;
    abstract public function getMyNameIs(): string;

    public function introduceYourself(): string
    {
        return $this->getGreetings() . $this->getMyNameIs() . ' ' . $this->name . '.';
    }
}

class RussianHuman extends HumanAbstract
{
    public function getGreetings(): string
    {
        return 'Привет, ';
    }

    public function getMyNameIs(): string
    {
        return 'меня зовут ';
    }
}

$russianHuman = new RussianHuman('Иван');
echo $russianHuman->introduceYourself();

echo '<br>';

class EnglishHuman extends HumanAbstract
{
    public function getGreetings(): string
    {
        return 'Hello, ';
    }

    public function getMyNameIs(): string
    {
        return 'my name is ';
    }
}

$englishHuman = new EnglishHuman('Peter');
echo $englishHuman->introduceYourself();