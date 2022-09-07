<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Post;
use Livewire\Component;
use App\Models\Category as ModelsCategory;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Category extends Component
{
    use LivewireAlert;

    // get the specific categories for delete operation
    public ModelsCategory $category;

    // listens to this method after confirmation the SweetAlert2  confirm alert
    protected $listeners = [
        'confirmed'
    ];

    // fires the SweetAlert2 confirm alert
    public function destroy(ModelsCategory $category)
    {
        // initialize $this->category
        $this->category = $category;
        $this->confirm('Are you sure do want to delete?', [
            'onConfirmed' => 'confirmed',
            'cancelButtonText' => 'Forget it',
            'confirmButtonText' => 'I\'m sure'
        ]);
    }

    // deletes the user saved in $this->user if destroy method has been confirmed
    public function confirmed()
    {
        $this->category->delete();
        $this->alert('success', 'Category deleted successfully');
    }

    // changes category status
    public function changeStatus(ModelsCategory $category)
    {
        // initialize $this->category
        $this->category = $category;
        $this->category->status == 1 ? $this->category->status = 0 : $this->category->status = 1;
        $this->category->save();
        $this->alert('success', 'Category status changed successfully');
    }

    public function render()
    {
        $this->categories = ModelsCategory::all();
        return view('livewire.admin.category.category', ['categories' => $this->categories])
            ->layout('livewire.admin.layouts.master');
    }
}
