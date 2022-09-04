<?php

namespace App\Http\Livewire\Admin\Author;

use App\Models\Author as ModelsAuthor;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Author extends Component
{
    use LivewireAlert;
    
    // all authors
    public $authors;

    // get the specific user for delete operation
    public ModelsAuthor $author;

    // listens to this method after confirmation the SweetAlert2  confirm alert
    protected $listeners = [
        'confirmed'
    ];

    // fires the SweetAlert2 confirm alert
    public function destroy(ModelsAuthor $author)
    {
        // initialize $this->user
        $this->author = $author;
        $this->confirm('Are you sure do want to delete?', [
            'onConfirmed' => 'confirmed',
            'cancelButtonText' => 'Forget it',
            'confirmButtonText' => 'I\'m sure'
        ]);
    }


    // deletes the user saved in $this->user if destroy method has been confirmed
    public function confirmed()
    {
        $this->author->delete();
        $this->alert('success','User deleted successfully');
    }

    public function render()
    {
        $this->authors = ModelsAuthor::all();
        return view('livewire.admin.author.author', ['authors' => $this->authors])
            ->layout('livewire.admin.layouts.master');
    }
}
