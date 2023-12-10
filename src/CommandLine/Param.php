<?php

namespace Tiutnev0\GoodJianYang\CommandLine;

class Param
{
    public function __construct(
        private readonly string $name,
        private readonly string $value
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}