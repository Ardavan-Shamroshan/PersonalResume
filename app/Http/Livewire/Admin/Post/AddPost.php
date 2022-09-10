<?php

namespace App\Http\Livewire\Admin\Post;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Post as ModelsPost;
use App\Models\Author as ModelsAuthor;
use App\Models\Category as ModelsCategory;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddPost extends Component
{
    use LivewireAlert, WithFileUploads;

    // authors property
    public $authors;
  // categories property
    public $categories;

    // post property
    public $post;

    // post image property
    public $postImage;

    // validation rules
    protected $rules = [
        'post.title' => ['required', 'string'],
        'post.author_id' => ['required', 'exists:authors,id'],
        'post.category_id' => ['required', 'exists:categories,id'],
        // 'post.summary' => ['required', 'string', 'max:120'],
        'post.body' => ['required', 'string'],
        'postImage' => ['required', 'image'],
        'post.status' => ['required'],
    ];

    public function mount()
    {
        // initialize post property
        $this->post = new ModelsPost;
        // get all authors
        $this->authors = ModelsAuthor::all();
        $this->categories = ModelsCategory::all();
    }


    public function updated($post)
    {
        $this->validateOnly($post);
    }

    // Submit and save project
    public function submit()
    {
        $data = $this->validate()['post'];

        // image upload
        // set name for image to upload - current timestamp.image extension (1662656825.jpg)
        $postImageName = Carbon::now()->timestamp . '.' . $this->postImage->extension();
        // set image address in data['image'] field to save in database
        $data['image'] = "images/post/$postImageName";

        // image store method now save files into public_path() because config.filesystems.php : 'root' => public_path('images')  has changed
        // save image to public/images/post with the modified name
        $this->postImage->storeAs('post', $postImageName);

        // create post
        ModelsPost::query()->create($data);
        $this->alert('success', 'Post created successfully');
        return redirect()->route('admin.post');
    }

    // Save project and directly head to submit another project
    public function saveAndNew()
    {
        $data = $this->validate()['post'];

        // image upload
        // set name for image to upload - current timestamp.image extension (1662656825.jpg)
        $postImageName = Carbon::now()->timestamp . '.' . $this->postImage->extension();
        // set image address in data['image'] field to save in database
        $data['image'] = "images/post/$postImageName";

        // image store method now save files into public_path() because config.filesystems.php : 'root' => public_path('images')  has changed
        // save image to public/images/post with the modified name
        $this->postImage->storeAs('post', $postImageName);

        // create post
        ModelsPost::query()->create($data);
        $this->alert('success', 'Post created successfully');
        return redirect()->route('admin.post.add-post');
    }

    // Save project and directly head to edit the current saved project
    public function saveAndEdit()
    {
        $data = $this->validate()['post'];

        // image upload
        // set name for image to upload - current timestamp.image extension (1662656825.jpg)
        $postImageName = Carbon::now()->timestamp . '.' . $this->postImage->extension();
        // set image address in data['image'] field to save in database
        $data['image'] = "images/post/$postImageName";

        // image store method now save files into public_path() because config.filesystems.php : 'root' => public_path('images')  has changed
        // save image to public/images/post with the modified name
        $this->postImage->storeAs('post', $postImageName);

        // create post
        $post = ModelsPost::query()->create($data);
        $this->alert('success', 'Post created successfully');
        return redirect()->route('admin.post.edit-post', $post);
    }


    public function render()
    {
        return view('livewire.admin.post.add-post')
            ->layout('livewire.admin.layouts.master');;
    }
}
