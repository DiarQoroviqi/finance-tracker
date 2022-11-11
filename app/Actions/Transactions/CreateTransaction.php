<?php

namespace App\Actions\Transactions;

use App\Contracts\CreatesTransaction;
use App\Enums\TransactionType;
use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CreateTransaction implements CreatesTransaction
{

    public function create(array $input)
    {
        $input = Validator::make($input, [
            'category_id' => ['required', Rule::in(Category::all()->pluck('id'))],
            'type' => ['required', Rule::in(TransactionType::values())],
            'date' => ['required', 'date', 'date_format:Y-m-d'],
            'amount' => ['required', 'numeric', 'min:1'],
            'note' => ['present', 'string'],
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
