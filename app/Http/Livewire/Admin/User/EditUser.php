<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Models\User as ModelsUser;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class EditUser extends Component
{
    use LivewireAlert;

    // Get the specific user
    public ModelsUser $user;

    // Validation rules
    protected $rules = [
        'user.name' => ['required', 'string', 'min:2'],
        'user.email' => ['required', 'email'],
    ];

    // Runs validation after any update to the Livewire component's data
    public function updated($user)
    {
        $this->validateOnly($user);
    }

    // Edit the record
    public function edit()
    {
        $validatedData = $this->validate()['user'];
        $validatedData['email_verified_at'] = $this->user->email_verified_at;
        $this->user->update($validatedData);
        $this->alert('success', 'user updated successfully');
        return redirect()->route('admin.user');
    }

    // Edit and directly edit again the record
    public function saveAndEdit()
    {
        $validatedData = $this->validate()['user'];
        $validatedData['email_verified_at'] = $this->user->email_verified_at;
        $this->user->update($validatedData);
        $this->alert('success', 'user updated successfully');
        return redirect()->route('admin.user.edit-user', $this->user);
    }

    // Edit and directly register new record
    public function saveAndNew()
    {
        $validatedData = $this->validate()['user'];
        $validatedData['email_verified_at'] = $this->user->email_verified_at;
        $this->user->update($validatedData);
        $this->alert('success', 'user updated successfully');
        return redirect()->route('admin.user.add-user');
    }

    // Cancel and redirect back
    public function resetFilters()
    {
        return redirect()->route('admin.user');
    }

    public function render()
    {
        return view('livewire.admin.user.edit-user')
            ->layout('livewire.admin.layouts.master');
    }
}
