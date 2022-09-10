<?php

namespace App\Http\Livewire\Admin\Experience;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Author as ModelsAuthor;
use App\Models\Experience as ModelsExperience;

class EditExperience extends Component
{
    use LivewireAlert;

    // experience property
    public ModelsExperience $experience;

    // get all authors
    public $authors;

    // validation rules
    protected $rules = [
        'experience.title' => ['required', 'string'],
        'experience.author_id' => ['required', 'exists:authors,id'],
        'experience.description' => ['required', 'string', 'max:120'],
        'experience.date' => ['required', 'string', 'max:15'],
        'experience.status' => ['required'],
    ];

    public function mount()
    {
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
        $this->experience->update($data);
        $this->alert('success', 'Experience created successfully');
        return redirect()->route('admin.experience');
    }

    // Save experience and directly head to submit another experience
    public function saveAndNew()
    {
        $data = $this->validate()['experience'];
        $this->experience->update($data);
        $this->alert('success', 'Experience created successfully');
        return redirect()->route('admin.experience.add-experience');
    }

    // Save experience and directly head to edit the current saved experience
    public function saveAndEdit()
    {
        $data = $this->validate()['experience'];
        $this->experience->update($data);
        $this->alert('success', 'experience created successfully');
        return redirect()->route('admin.experience.edit-experience', $this->experience);
    }

    public function render()
    {
        return view('livewire.admin.experience.edit-experience')
        ->layout('livewire.admin.layouts.master');
    }
}
