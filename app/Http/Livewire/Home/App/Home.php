<?php

namespace App\Http\Livewire\Home\App;

use Livewire\Component;

class Home extends Component
{
    public $author;

    public function mount($author)
    {
        $this->author = $author;
    }

    public function render()
    {
        return view('livewire.home.app.home');
    }
}
