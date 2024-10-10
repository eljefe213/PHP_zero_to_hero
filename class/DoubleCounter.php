<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Counter.php';
class DoubleCounter extends Counter
{
    public function get(): int
    {
        return parent::get() * 2;
    }
}
