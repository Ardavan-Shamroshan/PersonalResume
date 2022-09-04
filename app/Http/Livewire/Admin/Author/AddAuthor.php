<?php

namespace App\Http\Livewire\Admin\Author;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\Author as ModelsAuthor;
use App\Models\Skill as ModelsSkill;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddAuthor extends Component
{
    use LivewireAlert;

    public $author;
    public $skill;

    public $inputs = [];
    public $i = 0;

    // get the Author model instance
    public function mount()
    {
        $this->author = new ModelsAuthor;
        $this->skill = new ModelsSkill;
    }
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

        'skill.title.0' => ['required'],
        'skill.level.0' => ['required'],
        'skill.status.0' => ['required'],
        // multi skill inputs validation
        'skill.title.*' => 'required',
        'skill.level.*' => 'required',
        'skill.status.*' => 'required',
    ];


    public function updated($author)
    {
        $this->validateOnly($author);
    }

    // Save the record
    public function submit()
    {
        // validated author data
        $validatedAuthorData = $this->validate()['author'];
        // validated skill data
        $validatedSkillData = $this->validate()['skill'];

        // extract values (title, level, status) from validated skill data
        $skillsTitle = $validatedSkillData['title']; // skill titles data
        $skillsLevel = $validatedSkillData['level']; // skill level data
        $skillsStatus = $validatedSkillData['status']; // skill status data

        // creaate author
        $author = ModelsAuthor::query()->create($validatedAuthorData);

        // create skill
        foreach ($skillsTitle as $key => $value) {
            $skill = ModelsSkill::create([
                'author_id' => $author->id,
                'title' => $value,
                'level' => $skillsLevel[$key],
                'status' => $skillsStatus[$key],
            ]);
        }

        $this->alert('success', 'author created successfully');
        return redirect()->route('admin.author');
    }

    // Save and directly edit the record
    public function SaveAndEdit()
    {
        // validated author data
        $validatedAuthorData = $this->validate()['author'];
        // validated skill data
        $validatedSkillData = $this->validate()['skill'];

        // extract values (title, level, status) from validated skill data
        $skillsTitle = $validatedSkillData['title']; // skill titles data
        $skillsLevel = $validatedSkillData['level']; // skill level data
        $skillsStatus = $validatedSkillData['status']; // skill status data

        // creaate author
        $author = ModelsAuthor::query()->create($validatedAuthorData);

        // create skill
        foreach ($skillsTitle as $key => $value) {
            $skill = ModelsSkill::create([
                'author_id' => $author->id,
                'title' => $value,
                'level' => $skillsLevel[$key],
                'status' => $skillsStatus[$key],
            ]);
        }

        $this->alert('success', 'author created successfully');
        return redirect()->route('admin.author.edit-author', $author);
    }

    // Save and directly register new record
    public function SaveAndNew()
    {
        // validated author data
        $validatedAuthorData = $this->validate()['author'];
        // validated skill data
        $validatedSkillData = $this->validate()['skill'];

        // extract values (title, level, status) from validated skill data
        $skillsTitle = $validatedSkillData['title']; // skill titles data
        $skillsLevel = $validatedSkillData['level']; // skill level data
        $skillsStatus = $validatedSkillData['status']; // skill status data

        // creaate author
        $author = ModelsAuthor::query()->create($validatedAuthorData);

        // create skill
        foreach ($skillsTitle as $key => $value) {
            $skill = ModelsSkill::create([
                'author_id' => $author->id,
                'title' => $value,
                'level' => $skillsLevel[$key],
                'status' => $skillsStatus[$key],
            ]);
        }

        $this->alert('success', 'author created successfully');
        return redirect()->route('admin.author.add-author');
    }

    // reset all filters
    public function resetFilters()
    {
        $this->reset();
        return redirect()->route('admin.user');
    }


    public function render()
    {
        return view('livewire.admin.author.add-author')
            ->layout('livewire.admin.layouts.master');
    }
}
