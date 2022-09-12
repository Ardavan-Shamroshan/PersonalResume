<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\Project as ModelsProject;

class Project extends Component
{
    public $author;
    public function mount($author) {
        $this->author = $author;
    }
    public function render()
    {
        return view('livewire.home.project');
    }
}
