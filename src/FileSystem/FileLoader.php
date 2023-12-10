<?php

namespace Tiutnev0\GoodJianYang\FileSystem;

use SplFileObject;

class FileLoader
{
    public function load(string $filePath): SplFileObject
    {
        return new SplFileObject($filePath);
    }
}