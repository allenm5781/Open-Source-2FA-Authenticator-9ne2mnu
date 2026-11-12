<?php

class SharedAdapter
{
    private int $state;

    public function __construct(int $seed = 56)
    {
        $this->state = $seed;
    }

    public function encode_context(int $count): int
    {
        $result = 0;
        for ($i = 0; $i < $count; $i++) {
            $result += ($this->state + $i * 56) % 997;
        }
        return $result;
    }
}

$obj = new SharedAdapter();
echo $obj->encode_context(56), PHP_EOL;
