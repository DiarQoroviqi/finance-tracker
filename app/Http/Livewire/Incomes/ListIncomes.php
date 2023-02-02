<?php

declare(strict_types=1);

namespace App\Http\Livewire\Incomes;

use App\Models\Transaction;
use Livewire\Component;

class ListIncomes extends Component
{
    public $month;

    public array $incomes = [];

    public bool $confirmDeleteIncome = false;

    protected $queryString = ['month'];

    public function render()
    {
        $months = collect(range(1, 12))->mapWithKeys(function ($value) {
            return [$value => date('F', mktime(0, 0, 0, $value, 1, (int) date('y')))];
        })->toArray();

        $incomes = Transaction::query()
            ->whereYear('date', now()->format('Y'))
            ->whereMonth('date', $this->month)
            ->get();

        return view('livewire.incomes.list-incomes', [
            'months' => $months,
        ]);
    }
}
