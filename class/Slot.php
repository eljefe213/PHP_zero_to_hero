<?php

class Slot
{

    public $start;

    public $end;

    public function __construct(int $start, int $end)
    {
        $this->start = $start;
        $this->end = $end;
    }
}
