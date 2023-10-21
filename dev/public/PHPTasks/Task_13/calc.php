<?php

if (empty($_GET['operation'])) {
    return 'Не передана операция';
}

if (!isset($_GET['x1']) || !isset($_GET['x2'])) 
{
    return 'Не переданы аргументы';
}

is_numeric($x1 = $_GET['x1']);
is_numeric($x2 = $_GET['x2']);

if (!is_numeric($x1) || !is_numeric($x2))
{
    return 'Неверный тип данных / Ничего не передано';   
}

$expression = $x1 . ' ' . $_GET['operation'] . ' ' . $x2 . ' = ';

switch ($_GET['operation']) {
    case '+':
        $result = $x1 + $x2;
        break;
    case '-':
        $result = $x1 - $x2;
        break;
    case '*':
        $result = $x1 * $x2;
        break;
    case '/':
        if ($x2 == 0)
        {
            return "На ноль не делят :)";
            break;
        }
        $result = $x1 / $x2;

        break;
    default:
        return 'Операция не поддерживается';
}

return $expression . $result;