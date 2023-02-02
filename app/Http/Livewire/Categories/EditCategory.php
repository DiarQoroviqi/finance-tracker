<?php

declare(strict_types=1);

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class EditCategory extends ModalComponent
{
    use Actions;
    use AuthorizesRequests;

    public $category;

    public $state;

    public function mount(Category $category): void
    {
        $this->category = $category;
        $this->state = $category->toArray();
    }

    protected function rules(): array
    {
        return [
            'state.name' => ['required', 'string', 'min:2'],
            'state.chart_color' => ['required', 'string'],
        ];
    }

    protected function messages(): array
    {
        return [
            'state.name.required' => 'The name field cannot be empty.',
            'state.name.min' => 'The name must be at least 2 characters.',
            'state.chart_color.required' => 'The chart color field cannot be empty.',
        ];
    }

    public function updateCategory(): void
    {
        $this->authorize('update', $this->category);

        $data = $this->validate();

        $this->category->update($data['state']);

        $this->closeModalWithEvents([
            CategoriesOverview::getName() => 'categoryUpdated',
        ]);

        $this->notification()->success(
            'Category updated',
            'Your category was successfully updated'
        );
    }

    public function render(): View
    {
        return view('livewire.categories.edit-category');
    }
}
