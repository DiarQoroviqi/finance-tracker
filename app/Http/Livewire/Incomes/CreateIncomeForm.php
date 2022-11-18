<?php

declare(strict_types=1);

namespace App\Http\Livewire\Incomes;

use App\Contracts\Transactions\CreatesTransaction;
use App\Contracts\Transactions\CreatesTransactionRepeat;
use App\Enums\TransactionConfirmType;
use App\Enums\TransactionRepeatingType;
use App\Enums\TransactionType;
use App\Models\Category;
use App\Models\TransactionRepeat;
use Livewire\Component;

class CreateIncomeForm extends Component
{
    public array $state = [];

    public bool $repeating = false;

    public array $repeatingState = [];

    public array $periods = [];

    private array $categories = [];

    private array $transactionRepeatingTypes = [];

    private array $transactionConfirmTypes = [];

    public function mount(): void
    {
        $this->hydrateProperties();
    }

    public function hydrate()
    {
        $this->hydrateProperties();
    }

    public function render()
    {
        return view('livewire.incomes.create-income-form', [
            'categories' => $this->categories,
            'transactionRepeatingTypes' => $this->transactionRepeatingTypes,
            'transactionConfirmTypes' => $this->transactionConfirmTypes,
        ]);
    }

    public function createIncome(CreatesTransaction $creator, CreatesTransactionRepeat $repeatCreator)
    {
        $this->resetErrorBag();

        $transaction = $creator->create(
            $this->state + $this->repeatingState + [
                'type' => TransactionType::Income->value,
                'repeating' => $this->repeating,
            ]
        );

        if ($this->repeating) {
            $transactionRepeat = $repeatCreator->create($this->repeatingState);

            $transaction->repeat()->associate($transactionRepeat);
        }

        return redirect()->route('dashboard');
    }

    private function hydrateProperties(): void
    {
        $this->categories = Category::income()
            ->pluck('name', 'id')
            ->toArray();

        $this->transactionRepeatingTypes = TransactionRepeatingType::options();
        $this->transactionConfirmTypes = TransactionConfirmType::options();
        $this->periods = TransactionRepeat::periods();
    }
}
