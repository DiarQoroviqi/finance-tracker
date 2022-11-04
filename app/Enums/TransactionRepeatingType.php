<?php

declare(strict_types=1);

namespace App\Enums;

use App\Enums\Concerns\InteractsWithRandom;

enum TransactionRepeatingType: string
{
    use InteractsWithRandom;

    case Days = 'days';
    case Weeks = 'weeks';
    case Months = 'months';
}
