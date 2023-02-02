<?php

declare(strict_types=1);

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoriesOverview extends Component
{
    public function render()
    {
        return view('livewire.categories.categories-overview', [
            'categories' => Category::all(['id', 'name', 'chart_color', 'created_at'])
        ])
            ->layout('layouts.app', ['header' => 'Categories']);
    }

    public function getListeners(): array
    {
        return [
            'categoryCreated' => '$refresh',
            'categoryUpdated' => '$refresh',
            'categoryDeleted' => '$refresh',
        ];
    }
}
