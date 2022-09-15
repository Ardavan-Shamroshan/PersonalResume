<?php

namespace App\Http\Livewire\Home\App;

use Livewire\Component;

class Blog extends Component
{
    public $author;

    public function mount($author)
    {
        $this->author = $author;
    }
    public function render()
    {
        $posts = $this->author->posts()->where('status', 1)->get();
        return view('livewire.home.app.blog', ['posts' => $posts]);
    }
}
