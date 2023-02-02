<?php

declare(strict_types=1);

namespace App\Http\Livewire\Categories;

use Illuminate\Contracts\View\View;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class CreateCategory extends ModalComponent
{
    use Actions;

    public string $name = '';

    public string $chart_color = '';

    protected function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:2'],
            'chart_color' => ['required', 'string'],
        ];
    }

    public static function modalMaxWidth(): string
    {
        return 'lg';
    }

    public function create(): void
    {
        $this->validate();

        auth()->user()->categories()->create([
            'name' => $this->name,
            'chart_color' => $this->chart_color,
        ]);

        $this->closeModalWithEvents([
            CategoriesOverview::getName() => 'categoryCreated',
        ]);

        $this->notification()->success(
            'Category created',
            'Your category was successfully created'
        );
    }

    public function render(): View
    {
        return view('livewire.categories.create-category');
    }
}
