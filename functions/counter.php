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

function number_view_monthly(int $year, int $months): int
{
    $months = str_pad($months, 2, '0', STR_PAD_LEFT);
    $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'counter-' . $year . '-' . $months . '-' . '*';
    $files = glob($file);
    $total = 0;
    foreach ($files as $file) {
        $total += (int)file_get_contents($file);
    }
    return $total;
}
function number_view_monthly_details(int $year, int $months): array
{
    $months = str_pad($months, 2, '0', STR_PAD_LEFT);
    $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'counter-' . $year . '-' . $months . '-' . '*';
    $files = glob($file);
    $visits = [];
    foreach ($files as $file) {
        $parts = explode('-', basename($file));
        $visits[] = [
            'year' => $parts[1],
            'month' => $parts[2],
            'day' => $parts[3],
            'visits' => file_get_contents($file)
        ];
        return $visits;
    }
}
