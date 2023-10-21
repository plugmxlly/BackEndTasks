<?php

$login = !empty($_GET['login']) ? $_GET['login'] : '';
$password = !empty($_GET['password']) ? $_GET['password'] : '';
$env = '';

if ($login === 'admin') 
{
    if ($password === '12345')
    {
        $env = 'Логин и пароль верные!';
    }

    else
    {
        $env = 'Неверный пароль!';
    }
} 

else 
{
    $env = 'Пользователь не найден';
}
?>
<html>
<head>
    <title>Результат авторизации</title>
</head>
<body>
<p>
    <?= $env ?>
</p>
</body>
</html>