<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\Category as ModelsCategory;
use Illuminate\Support\Facades\Request;

class Post extends Component
{
    public $author;
    public function mount($author) {
        $this->author = $author;
    }

    public function like()
    {
        
    }
    public function render()
    {
        $categories = ModelsCategory::all();
        return view('livewire.home.post', ['categories' => $categories]);
    }
}
