<?php

namespace App\Http\Livewire\Admin\Project;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;
use App\Models\Author as ModelsAuthor;
use App\Models\Project as ModelsProject;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class EditProject extends Component
{
    use LivewireAlert, WithFileUploads;

    // experience property
    public ModelsProject $project;

    // project Image property
    public $projectImage;

    // get all authors
    public $authors;


    // validation rules
    protected $rules = [
        'project.title' => ['required', 'string'],
        'project.author_id' => ['required', 'exists:authors,id'],
        'project.description' => ['required', 'string'],
        'projectImage' => ['nullable', 'image'],
        'project.link' => ['required', 'string'],
        'project.status' => ['required'],
    ];

    public function mount()
    {
        $this->authors = ModelsAuthor::all();
    }

    public function updated($project)
    {
        $this->validateOnly($project);
    }

    // Submit and save project
    public function submit()
    {
        $data = $this->validate()['project'];

        // if new image defined for project
        if ($this->projectImage) {
            // image upload
            // set name for image to upload - current timestamp.image extension (1662656825.jpg)
            $projectImageName = Carbon::now()->timestamp . '.' . $this->projectImage->extension();
            // set image address in data['image'] field to save in database
            $data['image'] = "images/project/$projectImageName";

            // image store method now save files into public_path() because config.filesystems.php : 'root' => public_path('images')  has changed
            // save image to public/images/project with the modified name
            $this->projectImage->storeAs('project', $projectImageName);

            // delete previous image from directory
            if (File::exists($this->project->image))
                File::delete($this->project->image);
        }

        // update project
        $this->project->update($data);
        $this->alert('success', 'Project updated successfully');
        return redirect()->route('admin.project');
    }

    // Save project and directly head to submit another project
    public function saveAndNew()
    {
        $data = $this->validate()['project'];

        // if new image defined for project
        if ($this->projectImage) {
            // image upload
            // set name for image to upload - current timestamp.image extension (1662656825.jpg)
            $projectImageName = Carbon::now()->timestamp . '.' . $this->projectImage->extension();
            // set image address in data['image'] field to save in database
            $data['image'] = "images/project/$projectImageName";

            // image store method now save files into public_path() because config.filesystems.php : 'root' => public_path('images')  has changed
            // save image to public/images/project with the modified name
            $this->projectImage->storeAs('project', $projectImageName);

            // delete previous image from directory
            if (File::exists($this->project->image))
                File::delete($this->project->image);
        }

        // update project
        $this->project->update($data);
        $this->alert('success', 'Project updated successfully');
        return redirect()->route('admin.project.add-project');
    }

    // Save project and directly head to edit the current saved project
    public function saveAndEdit()
    {
        $data = $this->validate()['project'];

        // if new image defined for project
        if ($this->projectImage) :
            // image upload
            // set name for image to upload - current timestamp.image extension (1662656825.jpg)
            $projectImageName = Carbon::now()->timestamp . '.' . $this->projectImage->extension();
            // set image address in data['image'] field to save in database
            $data['image'] = "images/project/$projectImageName";

            // image store method now save files into public_path() because config.filesystems.php : 'root' => public_path('images')  has changed
            // save image to public/images/project with the modified name
            $this->projectImage->storeAs('project', $projectImageName);

            // delete previous image from directory
            if (File::exists($this->project->image))
                File::delete($this->project->image);
        endif;

        // update project
        $this->project->update($data);
        $this->alert('success', 'Project updated successfully');
        return redirect()->route('admin.project.edit-project', $this->project);
    }

    // reset all filters
    public function resetFilters()
    {
        return redirect()->route('admin.project');
    }



    public function render()
    {
        return view('livewire.admin.project.edit-project')
            ->layout('livewire.admin.layouts.master');
    }
}
