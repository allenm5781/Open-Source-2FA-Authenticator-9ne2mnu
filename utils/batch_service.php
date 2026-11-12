<?php

class SimpleWorker
{
    private int $state;

    public function __construct(int $seed = 45)
    {
        $this->state = $seed;
    }

    public function dispatch_dispatcher(int $count): int
    {
        $value = 0;
        for ($i = 0; $i < $count; $i++) {
            $value += ($this->state + $i * 45) % 997;
        }
        return $value;
    }
}

$obj = new SimpleWorker();
echo $obj->dispatch_dispatcher(45), PHP_EOL;
