<?php

namespace App\Http\Livewire\Admin\Experience;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Experience as ModelsExperience;

class Experience extends Component
{
    use LivewireAlert;

    // get the specific experiences for delete operation
    public ModelsExperience $experience;

    // listens to this method after confirmation the SweetAlert2  confirm alert
    protected $listeners = [
        'confirmed'
    ];

    // fires the SweetAlert2 confirm alert
    public function destroy(ModelsExperience $experience)
    {
        // initialize $this->experience
        $this->experience = $experience;
        $this->confirm('Are you sure do want to delete?', [
            'onConfirmed' => 'confirmed',
            'cancelButtonText' => 'Forget it',
            'confirmButtonText' => 'I\'m sure'
        ]);
    }

    // deletes the user saved in $this->user if destroy method has been confirmed
    public function confirmed()
    {
        $this->experience->delete();
        $this->alert('success', 'Category deleted successfully');
    }

    // changes experience status
    public function changeStatus(ModelsExperience $experience)
    {
        // initialize $this->experience
        $this->experience = $experience;
        $this->experience->status == 1 ? $this->experience->status = 0 : $this->experience->status = 1;
        $this->experience->save();
        $this->alert('success', 'Experience status changed successfully');
    }

    public function render()
    {
        $experiences = ModelsExperience::all();
        return view('livewire.admin.experience.experience', ['experiences' => $experiences])
            ->layout('livewire.admin.layouts.master');
    }
}
