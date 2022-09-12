<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\Category as ModelsCategory;
use App\Models\Post as ModelsPost;
use App\Models\Like as ModelsLike;

class Post extends Component
{
    public $author;
    public function mount($author)
    {
        $this->author = $author;
    }

    public function like(ModelsPost $post)
    {
        $clientIPAddress = request()->ip();
        ModelsLike::query()->create([
            'ip_address' => $clientIPAddress,
            'post_id' => $post->id,
        ]);
        return redirect()->route('home');
    }

    public function disLike(ModelsPost $post)
    {
        $clientIPAddress = request()->ip();
        $liked = $post->likes()->where('ip_address', $clientIPAddress)->first();
        $liked->delete();
        return redirect()->route('home');
    }

    public function render()
    {
        $categories = ModelsCategory::all();
        $clientIPAddress = request()->ip();
        return view('livewire.home.post', ['categories' => $categories, 'clientIPAddress' => $clientIPAddress]);
    }
}
