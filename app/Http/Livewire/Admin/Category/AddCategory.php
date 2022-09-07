<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Category as ModelsCategory;

class AddCategory extends Component
{
    use LivewireAlert;

    // category property
    public $category;

    // validation rules
    protected $rules = [
        'category.title' => ['required', 'string'],
        'category.status' => ['required'],
    ];

    public function mount()
    {
        // initialize category property
        $this->category = new ModelsCategory;
    }

    public function updated($category)
    {
        $data = $this->validateOnly($category);
    }

    // Submit and save category
    public function submit()
    {
        $data = $this->validate()['category'];
        ModelsCategory::query()->create($data);
        $this->alert('success', 'category created successfully');
        return redirect()->route('admin.category');
    }

    // Save category and directly head to submit another category
    public function saveAndNew()
    {
        $data = $this->validate()['category'];
        ModelsCategory::query()->create($data);
        $this->alert('success', 'category created successfully');
        return redirect()->route('admin.category.add-category');
    }

    // Save category and directly head to edit the current saved category
    public function saveAndEdit()
    {
        $data = $this->validate()['category'];
        $category = ModelsCategory::query()->create($data);
        $this->alert('success', 'category created successfully');
        return redirect()->route('admin.category.edit-category', $category);
    }

    public function render()
    {
        return view('livewire.admin.category.add-category')
            ->layout('livewire.admin.layouts.master');
    }
}
