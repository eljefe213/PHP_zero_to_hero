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

    public function toHTML(): string
    {
        return "<strong>{$this->start}h</strong> to <strong>{$this->end}h</strong>";
    }

    public function includesHour(int $hour): bool
    {
        return $hour >= $this->start && $hour <= $this->end;
    }

    public function junction(Slot $slot): bool
    {
        return $this->includesHour($slot->start) || $this->includesHour($slot->end) ||
            ($this->start > $slot->start && $this->end < $slot->end);
    }
}
