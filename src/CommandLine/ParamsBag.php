<?php

namespace Tiutnev0\GoodJianYang\CommandLine;

use Tiutnev0\GoodJianYang\Exception\DomainException;

class ParamsBag
{
    /**
     * @var Param[]
     */
    private array $params = [];

    /**
     * @throws DomainException
     */
    public function tryGet(string $name): Param
    {
        if (!isset($this->params[$name])) {
            throw new DomainException(
                sprintf('Params with name %s not found', $name)
            );
        }

        return $this->params[$name];
    }

    /**
     * @param Param[] $params
     * @return $this
     */
    public function load(array $params): self
    {
        $this->params = $params;

        return $this;
    }
}