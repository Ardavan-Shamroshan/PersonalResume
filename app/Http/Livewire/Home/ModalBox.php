<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\Skill as ModelsSkill;

class ModalBox extends Component
{
    public $skills;
    public $experiences;
    public function mount($skills, $experiences)
    {
        $this->skills = $skills;
        $this->experiences = $experiences;
    }

    public function render()
    {

        return view('livewire.home.modal-box');
    }
}
