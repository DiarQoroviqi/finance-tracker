<?php

declare(strict_types=1);

use App\Http\Livewire\Categories\CreateCategory;
use App\Models\Category;
use function Pest\Livewire\livewire;

beforeEach(function () {
    login();
});

it('will create category', function () {
    livewire(CreateCategory::class)
        ->set('name', $name = 'Test')
        ->set('chart_color', $chartColor = '#ffffff')
        ->call('create');

    $category = Category::first();

    expect($category)
        ->name->toBe($name)
        ->chart_color->toBe($chartColor)
        ->user_id->toBe(auth()->user()->id);
});

it('validates required fields', function () {
    livewire(CreateCategory::class)
        ->set('name', '')
        ->set('chart_color', '')
        ->call('create')
        ->assertHasErrors([
            'name' => 'required',
            'chart_color' => 'required'
        ]);
});

it('validates the minimum length of name', function () {
    livewire(CreateCategory::class)
        ->set('name', 't')
        ->set('chart_color', '#ffffff')
        ->call('create')
        ->assertHasErrors(['name' => 'min']);
});
