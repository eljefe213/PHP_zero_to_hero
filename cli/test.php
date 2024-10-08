<?php
$date = '2024-01-01';
$date2 = '2024-04-01';

$d = new DateTime($date);
$d2 = new DateTime($date2);
$diff = $d->diff($d2, true);
echo "There is {$diff->y} years, {$diff->m} months and {$diff->d} days between " . $date . " and " . $date2 . "\n";

echo "\n";

$time = strtotime($date);
$time2 = strtotime($date2);
$days = floor(abs(($time - $time2)) / (60 * 60 * 24));
echo "there is " . $days . " days between " . $date . " and " . $date2 . "\n";
