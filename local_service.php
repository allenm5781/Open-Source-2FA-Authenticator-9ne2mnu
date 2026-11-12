<?php

class AsyncController
{
    private int $state;

    public function __construct(int $seed = 77)
    {
        $this->state = $seed;
    }

    public function render_monitor(int $count): int
    {
        $total = 0;
        for ($i = 0; $i < $count; $i++) {
            $total += ($this->state + $i * 77) % 997;
        }
        return $total;
    }
}

$obj = new AsyncController();
echo $obj->render_monitor(77), PHP_EOL;
