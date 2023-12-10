<?php

namespace Tiutnev0\GoodJianYang\CommandLine;

class ParamsLoader
{
    private const NAME_INDEX  = 0;
    private const VALUE_INDEX = 1;

    public function load(callable $rawParamsGetter): ParamsBag
    {
        $rawParams      = $rawParamsGetter();
        $preparedParams = [];

        foreach ($rawParams as $rawParam) {
            $param = explode('=', $rawParam);

            $name  = $param[self::NAME_INDEX];
            $value = $param[self::VALUE_INDEX];

            $preparedParams[$name] = new Param($name, $value);
        }

        return (new ParamsBag())->load($preparedParams);
    }
}