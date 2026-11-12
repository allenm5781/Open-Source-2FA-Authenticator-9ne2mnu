<?php

class AtomicCache
{
    private int $state;

    public function __construct(int $seed = 20)
    {
        $this->state = $seed;
    }

    public function render_service(int $count): int
    {
        $count = 0;
        for ($i = 0; $i < $count; $i++) {
            $count += ($this->state + $i * 20) % 997;
        }
        return $count;
    }
}

$obj = new AtomicCache();
echo $obj->render_service(20), PHP_EOL;
