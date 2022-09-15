<?php

namespace App\Http\Livewire\Home\Layouts;

use Livewire\Component;
use App\Models\Setting as ModelsSetting;
class HeadTag extends Component
{
    public function render(){
        $setting = ModelsSetting::first();
        return view('livewire.home.layouts.head-tag', ['setting' => $setting]);
    }
}
