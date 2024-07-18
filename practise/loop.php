<?php 

$slots = [];

while (true) {
    $open = (int)readline("Opening time : ");
    $close = (int)readline("Closing time : ");
    if ($open >= $close) {
        echo "The slots can't be enregistrated because the opening time ($open) is higher than the closing time ($close)";
    } else {
        $slots[] = [$open, $close];
        $action = readline("Enter a new slot ? (n) : ");
        if ($action === "n") {
            break;
        }
    }
}