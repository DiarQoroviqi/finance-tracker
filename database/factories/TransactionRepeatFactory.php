<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\TransactionConfirmType;
use App\Enums\TransactionRepeatingType;
use App\Models\TransactionRepeat;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TransactionRepeat>
 */
class TransactionRepeatFactory extends Factory
{
    protected $model = TransactionRepeat::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'confirmation_type' => TransactionConfirmType::getRandom()->value,
            'period' => $this->faker->numberBetween(1, 31),
            'period_type' => TransactionRepeatingType::getRandom()->value,
            'ends_at' => null,
        ];
    }
}
