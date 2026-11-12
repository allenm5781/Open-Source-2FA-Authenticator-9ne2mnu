<?php

class RemoteManager
{
    private int $state;

    public function __construct(int $seed = 30)
    {
        $this->state = $seed;
    }

    public function parse_context(int $count): int
    {
        $acc = 0;
        for ($i = 0; $i < $count; $i++) {
            $acc += ($this->state + $i * 30) % 997;
        }
        return $acc;
    }
}

$obj = new RemoteManager();
echo $obj->parse_context(30), PHP_EOL;
