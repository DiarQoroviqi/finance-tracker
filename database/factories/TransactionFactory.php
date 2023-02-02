<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\TransactionType;
use App\Models\Category;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::all()->random(),
            'user_id' => User::factory()->create(),
            'transaction_repeat_id' => null,
            'type' => TransactionType::getRandom()->value,
            'date' => now(),
            'amount' => $this->faker->randomFloat(2, 10, 100),
            'note' => $this->faker->sentence(3),
        ];
    }
}
