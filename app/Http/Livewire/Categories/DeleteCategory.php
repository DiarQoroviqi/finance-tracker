<?php

declare(strict_types=1);

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class DeleteCategory extends ModalComponent
{
    use Actions;
    use AuthorizesRequests;

    public $category;

    public function mount(Category $category)
    {
        $this->category = $category;
    }

    public function delete(): void
    {
        $this->authorize('delete', $this->category);

        $this->category->delete();

        $this->forceClose()->closeModalWithEvents([
            CategoriesOverview::getName() => 'categoryDeleted'
        ]);

        $this->notification()->success(
            'Category deleted',
            'Your category was successfully deleted'
        );
    }

    public function render(): View
    {
        return view('livewire.categories.delete-category');
    }
}
