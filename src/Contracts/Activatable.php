<?php

namespace LaravelLiberu\Helpers\Contracts;

interface Activatable
{
    public function isActive(): bool;

    public function isInactive(): bool;
}
