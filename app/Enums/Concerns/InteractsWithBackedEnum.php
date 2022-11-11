<?php

declare(strict_types=1);

namespace App\Enums\Concerns;

use BackedEnum;

trait InteractsWithBackedEnum
{
    /**
     * @return array<string, string>
     */
    public static function options(): array
    {
        $cases = static::cases();

        return array_column($cases, 'name', 'value');
    }

    /**
     * @return array<int, string>
     */
    public static function names(): array
    {
        return array_column(static::cases(), 'name');
    }

    /**
     * @return array<int, string>
     */
    public static function values(): array
    {
        $cases = static::cases();

        return array_column($cases, 'value');
    }
}
