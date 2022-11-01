<?php

declare(strict_types=1);

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateGeneralSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.budget_mode', false);
        $this->migrator->add('general.time_period', 'monthly');
        $this->migrator->add('general.week_start_day', 'monday');
        $this->migrator->add('general.month_start_day', 1);
        $this->migrator->add('general.cary_over', false);
        $this->migrator->add('general.positive_only', true);
    }
}
