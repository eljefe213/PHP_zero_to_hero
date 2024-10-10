<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Counter.php';
class DoubleCounter extends Counter
{
    public function get(): int
    {
        if (!file_exists($this->file)) {
            return 0;
        }
        return (int)file_get_contents($this->file) * 2;
    }
}
