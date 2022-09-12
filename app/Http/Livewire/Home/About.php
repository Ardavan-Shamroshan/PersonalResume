<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\Skill as ModelsSkill;
use App\Models\Experience as ModelsExperience;

class About extends Component
{
    public $author;
    public $skills;
    public $experiences;
    public $age;
    public $birthDate;


    public function mount($author)
    {
        $this->author = $author;
        $this->skills = $this->author->skills;
        $this->experiences = $this->author->experiences;
        $this->age = (int)now()->format('Y') - $author->birth_date - 1;
        $this->birthDate = $author->birth_date - 620;
    }

    public function render()
    {
        return view('livewire.home.about');
    }
}
