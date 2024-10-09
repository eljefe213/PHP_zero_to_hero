<?php
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'Slot.php';
$slots = new Slot();
$slots->start = 9;
$slots->end = 17;
$slots2 = new Slot();
var_dump($slots);
var_dump($slots2);
