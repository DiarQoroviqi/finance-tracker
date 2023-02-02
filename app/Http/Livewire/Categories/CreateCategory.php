<?php

declare(strict_types=1);

namespace App\Http\Livewire\Categories;

use Illuminate\Support\Facades\Auth;
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
        return '6xl';
    }

    public function create()
    {
        $this->validate();

        $user = Auth::user();

        $user->categories()->create([
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

    public function render()
    {
        return view('livewire.categories.create-category');
    }
}
