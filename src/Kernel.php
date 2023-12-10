<?php

namespace Tiutnev0\GoodJianYang;

require_once '../vendor/autoload.php';

use Tiutnev0\GoodJianYang\CommandLine\ParamsLoader;
use Tiutnev0\GoodJianYang\FileSystem\FileLoader;

(new class {
    public function process(): void
    {
        $paramsLoader = new ParamsLoader();
        $paramsBug    = $paramsLoader->load(function () {
            return array_slice($_SERVER['argv'], 1);
        });

        $fileLoader = new FileLoader();
        $file       = $fileLoader->load(
            $paramsBug
                ->tryGet('template')
                ->getValue()
        );
    }
})->process();
