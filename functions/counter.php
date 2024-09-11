<?php

function add_view(): void
{
    $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'counter';
    $daily_file = $file . '-' . date('Y-m-d');
    counter_incrementation($file);
    counter_incrementation($daily_file);
}

function counter_incrementation(string $file): void
{
    $counter = 1;
    if (file_exists($file)) {
        $counter = (int)file_get_contents($file);
        $counter++;
    }
    file_put_contents($file, $counter);
}

function number_view(): string
{
    $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'counter';
    return file_get_contents($file);
}
