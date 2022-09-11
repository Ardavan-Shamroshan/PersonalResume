<?php

namespace App\Http\Livewire\Admin\Author;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Skill as ModelsSkill;
use Illuminate\Support\Facades\File;
use App\Models\Author as ModelsAuthor;
use App\Models\Category as ModelsCategory;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;

class AddAuthor extends Component
{
    use LivewireAlert, WithFileUploads;

    public $author;
    public $skill;
    public $categories;

    // properties needed for extra inputs
    public $inputs = []; // extra inputs saves here
    public $i = 0; // number of inputs saves here

    // get the Author model instance
    public function mount()
    {
        $this->author = new ModelsAuthor;
        $this->skill = new ModelsSkill;
    }

    // add an extra input realtime
    public function add($i)
    {
        $i += 1;
        $this->i = $i;
        array_push($this->inputs, $i);
    }

    // remove an extra input realtime
    public function remove($i)
    {
        $key = array_search($i, $this->inputs);
        if ($key !== false) {
            unset($this->inputs[$key]);
            $i -= 1;
            $this->i = $i;
        }
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
        // 'skill.category_id.0' => ['required'],

        // multi skill inputs validation
        'skill.title.*' => 'required',
        'skill.level.*' => 'required',
        'skill.status.*' => 'required',
        // 'skill.category_id.*' => 'required',

    ];


    // Runs after an property of Category updates
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

        DB::transaction(function () use ($validatedAuthorData, $skillsTitle, $skillsLevel, $skillsStatus) {
            // photo upload
            // set name for photo to upload - current timestamp.photo extension (1662656825.jpg)
            $authorPhotoName = Carbon::now()->timestamp . '.' . $this->authorPhoto->extension();
            // set photo address in data['photo'] field to save in database
            $validatedAuthorData['photo'] = "images/author/$authorPhotoName";

            // photo store method now save files into public_path() because config.filesystems.php : 'root' => public_path('photos')  has changed
            // save photo to public/photos/author with the modified name
            $this->authorPhoto->storeAs('author', $authorPhotoName);

            // delete previous photo from directory
            if (File::exists($this->author->photo))
                File::delete($this->author->photo);


            // update author
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
        });


        $this->alert('success', 'author created successfully');

        return redirect()->route('admin.author');
    }

    // Save and directly edit the record
    public function saveAndEdit()
    {
        // validated author data
        $validatedAuthorData = $this->validate()['author'];
        // validated skill data
        $validatedSkillData = $this->validate()['skill'];

        // extract values (title, level, status) from validated skill data
        $skillsTitle = $validatedSkillData['title']; // skill titles data
        $skillsLevel = $validatedSkillData['level']; // skill level data
        $skillsStatus = $validatedSkillData['status']; // skill status data
        DB::transaction(function () use ($validatedAuthorData, $skillsTitle, $skillsLevel, $skillsStatus) {
            // update author
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
        });
    }

    // Save and directly register new record
    public function saveAndNew()
    {
        // validated author data
        $validatedAuthorData = $this->validate()['author'];
        // validated skill data
        $validatedSkillData = $this->validate()['skill'];

        // extract values (title, level, status) from validated skill data
        $skillsTitle = $validatedSkillData['title']; // skill titles data
        $skillsLevel = $validatedSkillData['level']; // skill level data
        $skillsStatus = $validatedSkillData['status']; // skill status data

        DB::transaction(function () use ($validatedAuthorData, $skillsTitle, $skillsLevel, $skillsStatus) {
            // update author
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
        });

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
        $this->categories = ModelsCategory::all();
        return view('livewire.admin.author.add-author')
            ->layout('livewire.admin.layouts.master');
    }
}
