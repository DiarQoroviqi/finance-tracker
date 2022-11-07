<?php

declare(strict_types=1);

namespace App\Enums\Concerns;

trait InteractsWithRandom
{
    public static function getRandom(): self
    {
        $enums = self::cases();

        return $enums[array_rand($enums)];
    }
}
