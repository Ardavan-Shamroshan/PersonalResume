<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddUser extends Component
{
    use LivewireAlert;

    public $user;

    // get the User model instance
    public function mount()
    {
        $this->user = new ModelsUser;
    }

    // validation rules
    protected $rules = [
        'user.name' => ['required', 'string', 'min:2'],
        'user.email' => ['required', 'email'],
        'user.password' => ['required', 'confirmed', 'min:8'],
        'user.password_confirmation' => ['required'],
    ];

    // Runs validation after any update to the Livewire component's data
    public function updated($user)
    {
        $this->validateOnly($user);
    }

    // Save the record
    public function submit()
    {
        $validatedData = $this->validate()['user'];
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['remember_token'] = Str::random(60);
        ModelsUser::query()->create($validatedData);
        $this->alert('success', 'user created successfully');
        return redirect()->route('admin.user');
    }

    // Save and directly edit the record
    public function saveAndEdit()
    {
        $validatedData = $this->validate()['user'];
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['remember_token'] = Str::random(60);
        $user = ModelsUser::query()->create($validatedData);
        $this->alert('success', 'user created successfully');
        return redirect()->route('admin.user.edit-user', $user);
    }

    // Save and directly register new record
    public function saveAndNew()
    {
        $validatedData = $this->validate()['user'];
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['remember_token'] = Str::random(60);
        ModelsUser::query()->create($validatedData);
        $this->alert('success', 'user created successfully');
        $this->reset();
    }

    // reset all filters
    public function resetFilters()
    {
        $this->reset();
        return redirect()->route('admin.user');
    }

    public function render()
    {
        return view('livewire.admin.user.add-user')
            ->layout('livewire.admin.layouts.master');
    }
}
