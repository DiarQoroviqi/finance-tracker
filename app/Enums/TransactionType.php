<?php

declare(strict_types=1);

namespace App\Enums;

enum TransactionType: string
{
    case Income = 'income';
    case Expense = 'expense';

    public static function getRandom(): TransactionType
    {
        $enums = self::cases();

        return $enums[array_rand($enums)];
    }
}
