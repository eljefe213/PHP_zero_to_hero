<?php

$hour = (int)readline('Enter a hour: ');

if ((9 <= $hour && $hour <= 12) || (14 <= $hour && $hour <= 17 )) {
    echo "The store is open";
} else {
    echo "The store is closed";
}


 