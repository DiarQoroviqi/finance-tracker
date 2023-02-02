<?php

declare(strict_types=1);

use App\Http\Livewire\Categories\CategoriesOverview;
use App\Models\Category;
use function Pest\Laravel\get;
use function Pest\Livewire\livewire;

beforeEach(function () {
    login();
});

it('will assure that categories page contain categories overview component', function () {
    get('/categories')
        ->assertSeeLivewire('categories.categories-overview');
});

it('will show only categories that user owns', function () {
   $user = auth()->user();
   $category = Category::factory()
       ->for($user)->create();

   $differentCategory = Category::factory()->create();

   livewire(CategoriesOverview::class)
       ->assertSee($category->name)
       ->assertDontSee($differentCategory->name);
});
