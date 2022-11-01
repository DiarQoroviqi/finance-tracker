<?php

declare(strict_types=1);

namespace App\Enums;

enum TransactionConfirmationType: string
{
    case Automatic = 'automatic';
    case Manually = 'manually';

    public static function getRandom(): TransactionConfirmationType
    {
        $enums = self::cases();

        return $enums[array_rand($enums)];
    }
}
