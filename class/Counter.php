<?php

class Counter
{
    public $file;

    public function __construct(string $file)
    {
        $this->file = $file;
    }

    public function increment(): void
    {
        $counter = 1;
        if (file_exists($this->file)) {
            $counter = (int)file_get_contents($this->file);
            $counter++;
        }
        file_put_contents($this->file, $counter);
    }
}
