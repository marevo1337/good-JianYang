<?php

namespace Tiutnev0\GoodJianYang\Preprocessor\Unit;

class ShowUnit extends PreprocessorUnit
{
    private string $variable;
    private string $value;

    public function getVariable(): string
    {
        return $this->variable;
    }

    public function setVariable(string $variable): self
    {
        $this->variable = $variable;

        return $this;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }
}