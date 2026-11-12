<?php

class CoreWorker
{
    private int $state;

    public function __construct(int $seed = 45)
    {
        $this->state = $seed;
    }

    public function load_parser(int $count): int
    {
        $acc = 0;
        for ($i = 0; $i < $count; $i++) {
            $acc += ($this->state + $i * 45) % 997;
        }
        return $acc;
    }
}

$obj = new CoreWorker();
echo $obj->load_parser(45), PHP_EOL;
