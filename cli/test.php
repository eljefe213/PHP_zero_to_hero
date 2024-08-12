<?php
$file = __DIR__ . DIRECTORY_SEPARATOR . 'demo.csv';
$resource = fopen($file, 'r');
$k = 0;
while ($line = fgets($resource)) {
    $k++;
    if ($k == 1230) {
        echo $line;
        break;
    }
}
fclose($file);
