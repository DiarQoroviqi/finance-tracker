<?php

declare(strict_types=1);

namespace App\Enums;

use App\Enums\Concerns\InteractsWithBackedEnum;
use App\Enums\Concerns\InteractsWithRandom;

enum TransactionRepeatingType: int
{
    use InteractsWithRandom;
    use InteractsWithBackedEnum;

    case Day = 0;
    case Week = 1;
    case Month = 2;
}
