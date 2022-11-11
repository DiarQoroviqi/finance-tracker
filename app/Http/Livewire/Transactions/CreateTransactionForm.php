<?php

declare(strict_types=1);

namespace App\Http\Livewire\Transactions;

use App\Contracts\CreatesTransaction;
use App\Enums\TransactionType;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Redirector;

class CreateTransactionForm extends Component
{
    /**
     * @var array<string, string>
     */
    public array $state = [];

    /**
     * @var int|null
     */
    public ?int $type = null;

    /**
     * @var array<string, string>
     */
    private array $transactionTypes = [];

    /**
     * @var array<int, string>
     */
    private array $categories = [];

    public function mount(): void
    {
        $this->transactionTypes = TransactionType::options();
        $this->categories = Category::pluck('name', 'id')->toArray();
    }

    public function hydrate() {
        $this->transactionTypes = TransactionType::options();
        $this->categories = Category::pluck('name', 'id')->toArray();
    }

    public function render(): View
    {
        return view('livewire.transactions.create-transaction-form', [
            'transactionTypes' => $this->transactionTypes,
            'categories' => $this->categories,
        ]);
    }

    public function createTransaction(CreatesTransaction $creator)
    {
        $this->resetErrorBag();

        $creator->create($this->state + ['type' => $this->type]);

        return redirect()->route('dashboard');
    }

    public function updatedType($value): void
    {
        $this->categories = Category::query()
            ->where('type', $value)
            ->pluck('name', 'id')
            ->toArray();

        $this->transactionTypes = TransactionType::options();
    }
}
