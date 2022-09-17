<?php

namespace App\Http\Livewire\Admin\Skill;

use App\Models\Skill as ModelsSkill;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditSkill extends Component
{
    use LivewireAlert, WithFileUploads;

    // get the specific skill
    public $skill;

    // skill Image property
    public $skillImage;

    // listens to this method after confirmation the SweetAlert2  confirm alert
    protected $listeners = [
        'confirmed'
    ];

    // validation rules
    protected $rules = [
        'skillImage' => ['nullable', 'image'],
        'skill.title' => ['nullable'],
        'skill.level' => ['nullable'],
        'skill.status' => ['nullable'],
    ];

    public function mount($skill) {
        $this->skill = ModelsSkill::query()->find($skill);
    }

    // Runs after a property of Category updates
    public function updated($skill) {
        $this->validateOnly($skill);
    }

    // Save the record
    public function submit() {
        // validated skill data
        $data = $this->validate()['skill'];

        // if new image defined for skill
        if ($this->skillImage) {
            // image upload
            // set name for image to upload - current timestamp.image extension (1662656825.jpg)
            $skillImageName = Carbon::now()->timestamp . '.' . $this->skillImage->extension();
            // set image address in data['image'] field to save in database
            $data['image'] = "images/skill/$skillImageName";

            // image store method now save files into public_path() because config.filesystems.php : 'root' => public_path('images')  has changed
            // save image to public/images/skill with the modified name
            $this->skillImage->storeAs('skill', $skillImageName);

            // delete previous image from directory
            if (File::exists($this->skill->image))
                File::delete($this->skill->image);
        }

        // update skill
        $this->skill->update($data);
        $this->alert('success', 'Skill updated successfully');
        return redirect()->route('admin.skill');

    }

    // Save and directly edit the record
    public function saveAndEdit() {
        // validated skill data
        $data = $this->validate()['skill'];

        // if new image defined for skill
        if ($this->skillImage) {
            // image upload
            // set name for image to upload - current timestamp.image extension (1662656825.jpg)
            $skillImageName = Carbon::now()->timestamp . '.' . $this->skillImage->extension();
            // set image address in data['image'] field to save in database
            $data['image'] = "images/skill/$skillImageName";

            // image store method now save files into public_path() because config.filesystems.php : 'root' => public_path('images')  has changed
            // save image to public/images/skill with the modified name
            $this->skillImage->storeAs('skill', $skillImageName);

            // delete previous image from directory
            if (File::exists($this->skill->image))
                File::delete($this->skill->image);
        }

        // update skill
        $this->skill->update($data);
        $this->alert('success', 'Skill updated successfully');
        return redirect()->route('admin.skill.edit-skill', $this->skill);

    }

    public function render() {
        return view('livewire.admin.skill.edit-skill')
            ->layout('livewire.admin.layouts.master');
    }
}
