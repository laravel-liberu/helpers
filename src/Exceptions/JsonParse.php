<?php

namespace LaravelLiberu\Helpers\Exceptions;

class JsonParse extends LiberuException
{
    public static function fileNotFound(string $filename)
    {
        return new static(__(
            'Specified file was not found :filename',
            ['filename' => $filename]
        ));
    }

    public static function invalidFile(string $filename)
    {
        return new static(__(
            'File :filename a valid json',
            ['filename' => $filename]
        ));
    }
}
