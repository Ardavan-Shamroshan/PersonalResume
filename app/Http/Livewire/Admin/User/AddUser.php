<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;

class AddUser extends Component
{
    public function render()
    {
        return view('livewire.admin.user.add-user')
        ->layout('livewire.admin.layouts.master');
    }
}
