<?php

namespace App\Http\Livewire\Admin\Author;

use App\Models\Author as ModelsAuthor;
use Livewire\Component;

class Author extends Component
{
    public $authors;

    public function render()
    {
        $this->authors = ModelsAuthor::all();
        return view('livewire.admin.author.author', ['authors' => $this->authors])
            ->layout('livewire.admin.layouts.master');
    }
}
