<?php

declare(strict_types=1);

namespace App\Enums;

use App\Enums\Concerns\InteractsWithRandom;
use App\Enums\Concerns\InteractsWithBackedEnum;

enum TransactionType: int
{
    use InteractsWithRandom;
    use InteractsWithBackedEnum;

    case Income = 0;
    case Expense = 1;
}
