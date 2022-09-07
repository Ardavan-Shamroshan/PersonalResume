<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category as ModelsCategory;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class EditCategory extends Component
{
    use LivewireAlert;

    public ModelsCategory $category;


    protected $rules = [
        'category.title' => ['required', 'string'],
        'category.status' => ['required'],
    ];

    public function updated($category)
    {
        $data = $this->validateOnly($category);
    }

    // Submit and save category
    public function submit()
    {
        $data = $this->validate()['category'];
        $this->category->update($data);
        $this->alert('success', 'category created successfully');
        return redirect()->route('admin.category');
    }

    // Save category and directly head to submit another category
    public function saveAndNew()
    {
        $data = $this->validate()['category'];
        $this->category->update($data);
        $this->alert('success', 'category created successfully');
        return redirect()->route('admin.category.add-category');
    }

    // Save category and directly head to edit the current saved category
    public function saveAndEdit()
    {
        $data = $this->validate()['category'];
        $this->category->update($data);
        $this->alert('success', 'category created successfully');
        return redirect()->route('admin.category.edit-category', $this->category);
    }

    public function render()
    {
        return view('livewire.admin.category.edit-category')
            ->layout('livewire.admin.layouts.master');
    }
}
