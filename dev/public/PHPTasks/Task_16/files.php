<?php

$file = fopen(__DIR__ . '/file.txt', 'r');
while (!feof($file)) {
    echo fgets($file);
    echo '<br>';
}
fclose($file);


$file = fopen(__DIR__ . '/file2.txt', 'w');
for ($i = 1; $i < 101; $i++) {
    fputs($file, $i . PHP_EOL);
}
fclose($file);

$file = fopen(__DIR__ . '/file3.txt', 'a');
fputs($file, 'abc' . PHP_EOL);
fclose($file);

$data = file_get_contents(__DIR__ . '/file.txt');
echo $data;

$data = 'abc' . PHP_EOL . 'def' . PHP_EOL;
file_put_contents(__DIR__ . '/file3.txt', $data);

$data = 'abc' . PHP_EOL . 'def' . PHP_EOL;
file_put_contents(__DIR__ . '/file3.txt', $data, FILE_APPEND);









