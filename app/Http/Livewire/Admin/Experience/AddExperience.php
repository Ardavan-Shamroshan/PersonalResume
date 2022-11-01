<?php

namespace App\Http\Livewire\Admin\Experience;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Experience as ModelsExperience;
use App\Models\Author as ModelsAuthor;

class AddExperience extends Component
{
    use LivewireAlert;

    // experience property
    public $experience;

    // get all authors
    public $authors;

    // validation rules
    protected $rules = [
        'experience.title' => ['required', 'string'],
        'experience.author_id' => ['required', 'exists:authors,id'],
        'experience.description' => ['required', 'string', 'max:120'],
        'experience.date' => ['required', 'string', 'max:45'],
        'experience.status' => ['required'],
    ];

    public function mount()
    {
        // initialize experience property
        $this->experience = new ModelsExperience;
        $this->authors = ModelsAuthor::all();
    }

    public function updated($experience)
    {
        $data = $this->validateOnly($experience);
    }

    // Submit and save experience
    public function submit()
    {
        $data = $this->validate()['experience'];
        ModelsExperience::query()->create($data);
        $this->alert('success', 'Experience created successfully');
        return redirect()->route('admin.experience');
    }

    // Save experience and directly head to submit another experience
    public function saveAndNew()
    {
        $data = $this->validate()['experience'];
        ModelsExperience::query()->create($data);
        $this->alert('success', 'Experience created successfully');
        return redirect()->route('admin.experience.add-experience');
    }

    // Save experience and directly head to edit the current saved experience
    public function saveAndEdit()
    {
        $data = $this->validate()['experience'];
        $experience = ModelsExperience::query()->create($data);
        $this->alert('success', 'experience created successfully');
        return redirect()->route('admin.experience.edit-experience', $experience);
    }

    // reset all filters
    public function resetFilters()
    {
        $this->reset();
        return redirect()->route('admin.experience');
    }

    public function render()
    {
        return view('livewire.admin.experience.add-experience')
            ->layout('livewire.admin.layouts.master');
    }
}
