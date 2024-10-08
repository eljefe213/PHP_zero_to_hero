<?php
$date = new DateTime('2024-01-01');
$interval = new DateInterval('P1M1DT1M');
$date->add($interval);
var_dump($date);
