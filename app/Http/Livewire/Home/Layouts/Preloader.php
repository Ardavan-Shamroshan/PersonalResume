<?php

namespace App\Http\Livewire\Home\Layouts;

use App\Models\Author as ModelsAuthor;
use Livewire\Component;

class Preloader extends Component
{
    public function render()
    {
        $author = ModelsAuthor::first();
        return view('livewire.home.layouts.preloader', [
            'author' => $author
        ]);
    }
}
