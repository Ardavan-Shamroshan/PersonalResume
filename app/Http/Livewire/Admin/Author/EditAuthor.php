<?php

namespace App\Http\Livewire\Admin\Author;

use Livewire\Component;
use App\Models\Author as ModelsAuthor;
use App\Models\Skill as ModelsSkill;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class EditAuthor extends Component
{
    use LivewireAlert;

    // get the specific author
    public ModelsAuthor $author;
    public $skill;

    // listens to this method after confirmation the SweetAlert2  confirm alert
    protected $listeners = [
        'confirmed'
    ];

    public function mount()
    {
        $this->skill = new ModelsSkill;
    }

    public $inputs = [];
    public $i = 0;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs, $i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    // validation rules
    protected $rules = [
        'author.first_name' => ['required', 'string', 'min:2', 'max:150'],
        'author.last_name' => ['required', 'string', 'min:2', 'max:150'],
        'author.email' => ['required', 'email'],
        'author.title' => ['required', 'string', 'min:5', 'max:150'],
        'author.study' => ['required', 'string', 'min:5', 'max:255'],
        'author.mobile' => ['required', 'digits:11'],
        'author.city' => ['required', 'string', 'min:2', 'max:55'],
        'author.birth_date' => ['required', 'digits:4'],
        'author.status' => ['required'],

        'skill.title.0' => ['nullable'],
        'skill.level.0' => ['nullable'],
        'skill.status.0' => ['nullable'],
        // multi skill inputs validation
        'skill.title.*' => 'nullable',
        'skill.level.*' => 'nullable',
        'skill.status.*' => 'nullable',
    ];


    public function updated($author)
    {
        $this->validateOnly($author);
    }

    // Save the record
    public function edit()
    {
        // validated author data
        $validatedAuthorData = $this->validate()['author'];

        // check if there is any new skill
        if (array_key_exists('skill', $this->validate())) {
            // validated skill data
            $validatedSkillData = $this->validate()['skill'];

            // extract values (title, level, status) from validated skill data
            $skillsTitle = $validatedSkillData['title']; // skill titles data
            $skillsLevel = $validatedSkillData['level']; // skill level data
            $skillsStatus = $validatedSkillData['status']; // skill status data
            // create skill
            foreach ($skillsTitle as $key => $value) {
                $skill = ModelsSkill::create([
                    'author_id' => $this->author->id,
                    'title' => $value,
                    'level' => $skillsLevel[$key],
                    'status' => $skillsStatus[$key],
                ]);
            }
        }


        // creaate author
        $this->author->update($validatedAuthorData);

        $this->alert('success', 'author edited successfully');
        return redirect()->route('admin.author');
    }

    // Save and directly edit the record
    public function SaveAndEdit()
    { // validated author data
        $validatedAuthorData = $this->validate()['author'];

         // check if there is any new skill
         if (array_key_exists('skill', $this->validate())) {
            // validated skill data
            $validatedSkillData = $this->validate()['skill'];

            // extract values (title, level, status) from validated skill data
            $skillsTitle = $validatedSkillData['title']; // skill titles data
            $skillsLevel = $validatedSkillData['level']; // skill level data
            $skillsStatus = $validatedSkillData['status']; // skill status data
            // create skill
            foreach ($skillsTitle as $key => $value) {
                $skill = ModelsSkill::create([
                    'author_id' => $this->author->id,
                    'title' => $value,
                    'level' => $skillsLevel[$key],
                    'status' => $skillsStatus[$key],
                ]);
            }
        }

        // creaate author
        $this->author->update($validatedAuthorData);

        $this->alert('success', 'author edited successfully');
        return redirect()->route('admin.author.edit-author', $this->author);
    }

    // Save and directly register new record
    public function SaveAndNew()
    {
        // validated author data
        $validatedAuthorData = $this->validate()['author'];
         // check if there is any new skill
         if (array_key_exists('skill', $this->validate())) {
            // validated skill data
            $validatedSkillData = $this->validate()['skill'];

            // extract values (title, level, status) from validated skill data
            $skillsTitle = $validatedSkillData['title']; // skill titles data
            $skillsLevel = $validatedSkillData['level']; // skill level data
            $skillsStatus = $validatedSkillData['status']; // skill status data
            // create skill
            foreach ($skillsTitle as $key => $value) {
                $skill = ModelsSkill::create([
                    'author_id' => $this->author->id,
                    'title' => $value,
                    'level' => $skillsLevel[$key],
                    'status' => $skillsStatus[$key],
                ]);
            }
        }
        // creaate author
        $this->author->update($validatedAuthorData);

        $this->alert('success', 'author created successfully');
        return redirect()->route('admin.author.add-author');
    }


    // fires the SweetAlert2 confirm alert
    public function destroy(ModelsSkill $skill)
    {
        $this->skill = $skill;
        $this->confirm('Are you sure do want to delete?', [
            'onConfirmed' => 'confirmed',
            'cancelButtonText' => 'Forget it',
            'confirmButtonText' => 'I\'m sure'
        ]);
    }


    // deletes the user saved in $this->user if destroy method has been confirmed
    public function confirmed()
    {
        $this->skill->delete();
        $this->alert('success', 'Skill deleted successfully');
    }

    // reset all filters
    public function resetFilters()
    {
        return redirect()->route('admin.author');
    }


    public function render()
    {
        $skills = ModelsSkill::query()->where('author_id', $this->author->id)->get();
        return view('livewire.admin.author.edit-author', ['skills' => $skills])
            ->layout('livewire.admin.layouts.master');
    }
}
