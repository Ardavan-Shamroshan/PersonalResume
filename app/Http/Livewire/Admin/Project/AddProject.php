<?php

namespace App\Http\Livewire\Admin\Project;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Author as ModelsAuthor;
use App\Models\Project as ModelsProject;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddProject extends Component
{
    use LivewireAlert, WithFileUploads;

    // project property
    public $project;

    // project Image property
    public $projectImage;

    // get all authors
    public $authors;

    // validation rules
    protected $rules = [
        'project.title' => ['required', 'string'],
        'project.author_id' => ['required', 'exists:authors,id'],
        'project.description' => ['required', 'string'],
        'projectImage' => ['required','image'],
        'project.link' => ['required', 'string'],
        'project.status' => ['required'],
    ];

    public function mount()
    {
        // initialize project property
        $this->project = new ModelsProject;
        $this->authors = ModelsAuthor::all();
    }

    public function updated($project)
    {
        $data = $this->validateOnly($project);
    }

    // Submit and save project
    public function submit()
    {
        $data = $this->validate()['project'];

        // image upload
        // set name for image to upload - current timestamp.image extension (1662656825.jpg)
        $projectImageName = Carbon::now()->timestamp . '.' . $this->projectImage->extension();
        // set image address in data['image'] field to save in database
        $data['image'] = "images/project/$projectImageName";

        // image store method now save files into public_path() because config.filesystems.php : 'root' => public_path('images')  has changed
        // save image to public/images/project with the modified name
        $this->projectImage->storeAs('project', $projectImageName);

        // create project
        ModelsProject::query()->create($data);
        $this->alert('success', 'Project created successfully');
        return redirect()->route('admin.project');
    }

    // Save project and directly head to submit another project
    public function saveAndNew()
    {
        $data = $this->validate()['project'];

        // image upload
        // set name for image to upload - current timestamp.image extension (1662656825.jpg)
        $projectImageName = Carbon::now()->timestamp . '.' . $this->projectImage->extension();
        // set image address in data['image'] field to save in database
        $data['image'] = "images/project/$projectImageName";

        // image store method now save files into public_path() because config.filesystems.php : 'root' => public_path('images')  has changed
        // save image to public/images/project with the modified name
        $this->projectImage->storeAs('project', $projectImageName);

        // create project
        ModelsProject::query()->create($data);
        $this->alert('success', 'Project created successfully');
        return redirect()->route('admin.project.add-project');
    }

    // Save project and directly head to edit the current saved project
    public function saveAndEdit()
    {
        $data = $this->validate()['project'];

        // image upload
        // set name for image to upload - current timestamp.image extension (1662656825.jpg)
        $projectImageName = Carbon::now()->timestamp . '.' . $this->projectImage->extension();
        // set image address in data['image'] field to save in database
        $data['image'] = "images/project/$projectImageName";

        // image store method now save files into public_path() because config.filesystems.php : 'root' => public_path('images')  has changed
        // save image to public/images/project with the modified name
        $this->projectImage->storeAs('project', $projectImageName);

        // create project
        $project = ModelsProject::query()->create($data);
        $this->alert('success', 'Project created successfully');
        return redirect()->route('admin.project.edit-project', $project);
    }

    public function render()
    {
        return view('livewire.admin.project.add-project')
            ->layout('livewire.admin.layouts.master');
    }
}
