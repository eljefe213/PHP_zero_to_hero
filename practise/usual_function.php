<?php 

function yes_or_no ($sentence) {
    while(true) {
        $response = readline($sentence . " - (y)es/(n)o : ");
        if ($response === "o") {
            return true;
        } elseif ($response === "n") {
            return false;
        }
    }
}

function get_slot ($sentence = "Enter a slot : ") {
    echo $sentence . "\n";
    while(true) {
        $opening = (int)readline("Opening time : ");
        if ($opening >= 0 && $opening <= 23) {
            break;
        }
    }
    while (true) {
        $closing = (int)readline("Closing time : ");
        if($closing >= 0 && $closing <= 23 && $closing > $opening) {
            break;
        }
    }
    return [$opening, $closing];
}

function get_slots (string $sentence = "Please enter your slots : ") {
    $slots = [];
    $continue = true;
    while ($continue) {
        $slots[] = get_slot();
        $continue = yes_or_no("Would like to continue ? ");
    }
    return $slots;
}