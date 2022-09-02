<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Models\User as ModelsUser;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class User extends Component
{
    use LivewireAlert;

    // all users
    public $users;

    // get the specific user for delete operation
    public ModelsUser $user;

    // listens to this method after confirmation the SweetAlert2  confirm alert
    protected $listeners = [
        'confirmed'
    ];

    // fires the SweetAlert2 confirm alert
    public function destroy(ModelsUser $user)
    {
        // initialize $this->user
        $this->user = $user;
        $this->confirm('Are you sure do want to delete?', [
            'onConfirmed' => 'confirmed',
            'cancelButtonText' => 'Forget it',
            'confirmButtonText' => 'I\'m sure'
        ]);
    }


    // deletes the user saved in $this->user if destroy method has been confirmed
    public function confirmed()
    {
        $this->user->delete();
        $this->alert('success','User deleted successfully');
    }

    public function render()
    {
        $this->users = ModelsUser::all();
        return view('livewire.admin.user.user', ['users' => $this->users])
            ->layout('livewire.admin.layouts.master');
    }
}
