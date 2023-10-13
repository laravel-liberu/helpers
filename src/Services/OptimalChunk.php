<?php

namespace LaravelLiberu\Helpers\Services;

use Illuminate\Support\Collection;

class OptimalChunk
{
    final public const Thresholds = [
        ['limit' => 10 * 1000, 'chunk' => 1000],
        ['limit' => 50 * 1000, 'chunk' => 2 * 1000],
        ['limit' => 250 * 1000, 'chunk' => 5 * 1000],
        ['limit' => 1000 * 1000, 'chunk' => 10 * 1000],
    ];

    final public const MaxChunk = 10000;

    public static function get(int $count, int $min = 1_000_000): int
    {
        $match = Collection::wrap(self::Thresholds)
            ->first(fn ($threshold) => $count <= $threshold['limit']);

        $limit = $match ? $match['chunk'] : self::MaxChunk;

        return min($limit, $min);
    }
}
