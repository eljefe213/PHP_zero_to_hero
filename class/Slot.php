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

    public function includesHour(int $hour): bool
    {
        return $hour >= $this->start && $hour <= $this->end;
    }
}
