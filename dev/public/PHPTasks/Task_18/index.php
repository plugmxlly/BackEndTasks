<html>
<head>
    <title>Фотоальбом</title>
</head>
<body>
<?php
$files = scandir(__DIR__ . '/uploads');
$links = [];
foreach ($files as $fileName) {
    if ($fileName === '.' || $fileName === '..') 
    {
        continue;
    }
    $links[] = '/PHPTasks/Task_18/uploads/' . $fileName;
}

foreach ($links as $link):?>
    <a href="<?= $link ?>"><img src="<?= $link ?>" height="80px"></a>
<?php endforeach; ?>
</body>
</html>