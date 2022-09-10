<?php

namespace App\Http\Livewire\Admin\Setting;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;
use App\Models\Setting as ModelsSetting;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Setting extends Component
{
    use LivewireAlert, WithFileUploads;

    public $editedSettingIndex = null;
    public $setting;
    public $settingLogo;
    public $rules = [
        'setting.title' => ['required', 'string', 'max:125'],
        'settingLogo' => ['required', 'image'],
        'setting.copy_right' => ['required', 'string'],
    ];

    public function mount()
    {
        $this->setting = ModelsSetting::first();
    }

    public function updated($setting)
    {
        $this->validateOnly($setting);
    }

    public function editSetting($settingIndex)
    {
        $this->editedSettingIndex = $settingIndex;
    }

    public function submit()
    {
        $data = $this->validate()['setting'];

        // if new image defined for setting
        if ($this->settingLogo) {
            // image upload
            // set name for image to upload - current timestamp.image extension (1662656825.jpg)
            $settingLogoName = Carbon::now()->timestamp . '.' . $this->settingLogo->extension();
            // set image address in data['image'] field to save in database
            $data['logo'] = "images/setting/$settingLogoName";

            // image store method now save files into public_path() because config.filesystems.php : 'root' => public_path('images')  has changed
            // save image to public/images/setting with the modified name
            $this->settingLogo->storeAs('setting', $settingLogoName);

            // delete previous image from directory
            if (File::exists($this->setting->logo))
                File::delete($this->setting->logo);
        }

        // update setting
        $this->setting->update($data);
        $this->alert('success', 'Setting updated successfully');
    }

    public function render()
    {
       ;
        return view('livewire.admin.setting.setting')
            ->layout('livewire.admin.layouts.master');
    }
}
