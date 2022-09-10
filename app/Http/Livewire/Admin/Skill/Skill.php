<?php

namespace App\Http\Livewire\Admin\Skill;

use Livewire\Component;
use App\Models\Skill as ModelsSkill;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Skill extends Component
{
    use LivewireAlert;

    // listens to this method after confirmation the SweetAlert2  confirm alert
    protected $listeners = [
        'confirmed'
    ];

    // get the specific skill
    public ModelsSkill $skill;

    // fires the SweetAlert2 confirm alert
    public function destroy(ModelsSkill $skill)
    {
        // initialize $this->category
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

    // changes category status
    public function changeStatus(ModelsSkill $skill)
    {
        // initialize $this->category
        $this->skill = $skill;
        $this->skill->status == 1 ? $this->skill->status = 0 : $this->skill->status = 1;
        $this->skill->save();
        $this->alert('success', 'Skill status changed successfully');
    }

    public function render()
    {
        $skills = ModelsSkill::all();
        return view('livewire.admin.skill.skill', ['skills' => $skills])
        ->layout('livewire.admin.layouts.master');
    }
}
