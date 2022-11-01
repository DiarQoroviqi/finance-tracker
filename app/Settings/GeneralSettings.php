<?php

declare(strict_types=1);

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public bool $budget_mode;

    public string $time_period;

    public string $week_start_day;

    public string $month_start_day;

    public bool $cary_over;

    public bool $positive_only;

    public static function group(): string
    {
        return 'general';
    }
}
