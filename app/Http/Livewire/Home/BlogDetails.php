<?php

namespace App\Http\Livewire\Home;

use App\Models\Post as ModelsPost;
use Livewire\Component;

class BlogDetails extends Component
{
    public $post;
    public function mount($id)
    {
        $this->post = ModelsPost::find($id);
    }

    public function render()
    {
        return view('livewire.home.blog-details')
            ->layout('livewire.home.layouts.master-blog');
    }
}
