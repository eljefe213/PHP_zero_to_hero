<?php
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'Slot.php';
$slots = new Slot(9, 17);
$slots2 = new Slot(14, 16);
var_dump(
    $slots->includesHour(10),
    $slots2->includesHour(10)
);
