<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

use App\Models\Author as ModelsAuthor;
class Index extends Component
{
    public function render()
    {
        $author = ModelsAuthor::first();
        return view('livewire.home.index', ['author' => $author])
            ->layout('livewire.home.layouts.master');
    }
}
