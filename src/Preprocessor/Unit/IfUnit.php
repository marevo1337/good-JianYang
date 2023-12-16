<?php

namespace Tiutnev0\GoodJianYang\Preprocessor\Unit;

class IfUnit extends PreprocessorUnit
{
    private bool   $condition;
    private string $body;

    public function getCondition(): bool
    {
        return $this->condition;
    }

    public function setCondition(bool $condition): self
    {
        $this->condition = $condition;

        return $this;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function setBody(string $body): self
    {
        $this->body = $body;

        return $this;
    }
}