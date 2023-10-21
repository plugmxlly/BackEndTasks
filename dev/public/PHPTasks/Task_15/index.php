<?php

require __DIR__ . '/auth.php';
$login = getUserLogin();

?>
<html>
<head>
    <title>Главная страница</title>
</head>
<body>
<?php if ($login === null): ?>
<a href="/PHPTasks/Task_15/login.php">Авторизуйтесь</a>
<?php else: ?>
Добро пожаловать, <?= $login ?>
<br>
<a href="/PHPTasks/Task_15/logout.php">Выйти</a>
<?php endif; ?>
</body>
</html>