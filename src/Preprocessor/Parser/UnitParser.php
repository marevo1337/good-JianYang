<?php

namespace Tiutnev0\GoodJianYang\Preprocessor\Parser;

use SplFileObject;
use Tiutnev0\GoodJianYang\CommandLine\ParamsBag;
use Tiutnev0\GoodJianYang\Preprocessor\Syntax\SyntaxEnum;
use Tiutnev0\GoodJianYang\Preprocessor\Unit\PreprocessorUnit;

class UnitParser
{
    /**
     * @return PreprocessorUnit[]
     */
    public function parse(SplFileObject $source, ParamsBag $paramsBag): array
    {
        while (!$source->eof())
        {
            $line = $source->fgetc();
        }

        return [];
    }
}