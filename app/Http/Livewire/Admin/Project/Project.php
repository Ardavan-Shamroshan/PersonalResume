<?php

namespace App\Http\Livewire\Admin\Project;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Project as ModelsProject;

class Project extends Component
{
    use LivewireAlert;

    // get the specific projects for delete operation
    public ModelsProject $project;

    // listens to this method after confirmation the SweetAlert2  confirm alert
    protected $listeners = [
        'confirmed'
    ];

    // fires the SweetAlert2 confirm alert
    public function destroy(ModelsProject $project)
    {
        // initialize $this->project
        $this->project = $project;
        $this->confirm('Are you sure do want to delete?', [
            'onConfirmed' => 'confirmed',
            'cancelButtonText' => 'Forget it',
            'confirmButtonText' => 'I\'m sure'
        ]);
    }

    // deletes the user saved in $this->user if destroy method has been confirmed
    public function confirmed()
    {
        $this->project->delete();
        $this->alert('success', 'Category deleted successfully');
    }

    // changes project status
    public function changeStatus(ModelsProject $project)
    {
        // initialize $this->project
        $this->project = $project;
        $this->project->status == 1 ? $this->project->status = 0 : $this->project->status = 1;
        $this->project->save();
        $this->alert('success', 'Project status changed successfully');
    }

    public function render()
    {
        $projects = ModelsProject::all();
        return view('livewire.admin.project.project', ['projects' => $projects])
            ->layout('livewire.admin.layouts.master');
    }
}
