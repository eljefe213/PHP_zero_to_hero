<?php

class Counter
{
    const INCREMENT = 1;
    protected $file;

    public function __construct(string $file)
    {
        $this->file = $file;
    }

    public function increment(): void
    {
        $counter = 1;
        if (file_exists($this->file)) {
            $counter = (int)file_get_contents($this->file);
            $counter += self::INCREMENT;
        }
        file_put_contents($this->file, $counter);
    }

    public function get(): int
    {
        if (!file_exists($this->file)) {
            return 0;
        }
        return (int)file_get_contents($this->file);
    }
}
