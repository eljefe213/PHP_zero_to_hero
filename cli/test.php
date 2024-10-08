<?php

$date = new DateTime();
echo $date->format('d/m/Y H:i:s');

echo "\n";

$time = time();
echo date('Y-m-d H:i:s', $time);
