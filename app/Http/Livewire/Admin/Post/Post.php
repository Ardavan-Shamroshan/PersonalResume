<?php

namespace App\Http\Livewire\Admin\Post;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Post as ModelsPost;

class Post extends Component
{
    use LivewireAlert;

    // get post property
    public $post;

    // listens to this method after confirmation the SweetAlert2  confirm alert
    protected $listeners = [
        'confirmed'
    ];


    // fires the SweetAlert2 confirm alert
    public function destroy(ModelsPost $post)
    {
        // initialize $this->post
        $this->post = $post;
        $this->confirm('Are you sure do want to delete?', [
            'onConfirmed' => 'confirmed',
            'cancelButtonText' => 'Forget it',
            'confirmButtonText' => 'I\'m sure'
        ]);
    }

    // deletes the user saved in $this->user if destroy method has been confirmed
    public function confirmed()
    {
        $this->post->delete();
        $this->alert('success', 'Category deleted successfully');
    }

    // changes post status
    public function changeStatus(ModelsPost $post)
    {
        // initialize $this->post
        $this->post = $post;
        $this->post->status == 1 ? $this->post->status = 0 : $this->post->status = 1;
        $this->post->save();
        $this->alert('success', 'Post status changed successfully');
    }

    public function render()
    {
        $posts = ModelsPost::all();
        return view('livewire.admin.post.post', ['posts' => $posts])
            ->layout('livewire.admin.layouts.master');
    }
}
