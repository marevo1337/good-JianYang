<?php

namespace Tiutnev0\GoodJianYang\Preprocessor\Unit;

abstract class PreprocessorUnit
{
    /**
     * @var int[]
     */
    private array $lines;

    private int $cursorStartPosition;
    private int $cursorEndPosition;

    /**
     * @return int[]
     */
    public function getLines(): array
    {
        return $this->lines;
    }

    public function setLines(array $lines): self
    {
        $this->lines = $lines;

        return $this;
    }

    public function getCursorStartPosition(): int
    {
        return $this->cursorStartPosition;
    }

    public function setCursorStartPosition(int $cursorStartPosition): self
    {
        $this->cursorStartPosition = $cursorStartPosition;

        return $this;
    }

    public function getCursorEndPosition(): int
    {
        return $this->cursorEndPosition;
    }

    public function setCursorEndPosition(int $cursorEndPosition): self
    {
        $this->cursorEndPosition = $cursorEndPosition;

        return $this;
    }
}