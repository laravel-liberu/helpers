<?php

namespace LaravelEnso\Helpers\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use LaravelEnso\Helpers\Services\Obj as Service;

class Obj implements CastsAttributes
{
    public function get($model, string $key, $value, array $attributes)
    {
        return new Service(json_decode((string) $value, true, 512, JSON_THROW_ON_ERROR));
    }

    public function set($model, string $key, $value, array $attributes)
    {
        return $value !== null
            ? json_encode($value, JSON_THROW_ON_ERROR)
            : null;
    }
}
