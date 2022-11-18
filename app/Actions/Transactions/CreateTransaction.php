<?php

declare(strict_types=1);

namespace App\Actions\Transactions;

use App\Contracts\Transactions\CreatesTransaction;
use App\Enums\TransactionConfirmType;
use App\Enums\TransactionRepeatingType;
use App\Enums\TransactionType;
use App\Models\Category;
use App\Models\Transaction;
use App\Models\TransactionRepeat;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CreateTransaction implements CreatesTransaction
{
    public function create(array $input): Transaction
    {
        $input = Validator::make($input, [
            'category_id' => ['required', Rule::in(Category::all()->pluck('id'))],
            'type' => ['required', Rule::in(TransactionType::values())],
            'date' => ['required', 'date', 'date_format:Y-m-d'],
            'amount' => ['required', 'numeric', 'min:1'],
            'note' => ['sometimes'],
            'repeating' => ['sometimes'],
            'period' => ['required_if:repeating,true', Rule::in(TransactionRepeat::periods())],
            'period_type' => ['required_if:repeating,true', Rule::in(TransactionRepeatingType::values())],
            'ends_at' => ['required_if:repeating,true', 'date', 'date_format:Y-m-d'],
            'confirmation_type' => ['required_if:repeating,true', Rule::in(TransactionConfirmType::values())],
        ])->validateWithBag('createTransaction');

        return Transaction::create([
            'category_id' => $input['category_id'],
            'type' => $input['type'],
            'date' => $input['date'],
            'amount' => (float) $input['amount'],
            'note' => $input['note'],
        ]);
    }
}
