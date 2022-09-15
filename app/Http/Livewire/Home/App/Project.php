<?php

namespace App\Http\Livewire\Home\App;

use Livewire\Component;

class Project extends Component
{
    public $author;

    public function mount($author) {
        $this->author = $author;
    }

    public function render()
    {
        $projects = $this->author->projects()->where('status', 1)->get();
        return view('livewire.home.app.project', ['projects' => $projects]);
    }
}
