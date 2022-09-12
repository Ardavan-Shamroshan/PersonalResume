<?php

namespace App\Http\Livewire\Home\Layouts;

use Livewire\Component;

class LeftPart extends Component
{
    public $setting;
    public function mont($setting)
    {
        $this->setting = $setting;
    }
    public function render()
    {
        return view('livewire.home.layouts.left-part');
    }
}
