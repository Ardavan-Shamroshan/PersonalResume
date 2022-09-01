<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User as ModelsUser;
use Livewire\Component;

class User extends Component
{
    public $users;

    public function mount() {
        $this->users = ModelsUser::all();
    }

    public function render()
    {
        return view('livewire.admin.user.user')
        ->layout('livewire.admin.layouts.master');
    }
}
