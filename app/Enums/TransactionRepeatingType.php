<?php

declare(strict_types=1);

namespace App\Enums;

enum TransactionRepeatingType: string
{
    case Days = 'days';
    case Weeks = 'weeks';
    case Months = 'months';

    public static function getRandom(): TransactionRepeatingType
    {
        $enums = self::cases();

        return $enums[array_rand($enums)];
    }
}
