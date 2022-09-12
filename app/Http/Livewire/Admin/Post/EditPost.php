<?php

namespace App\Http\Livewire\Admin\Post;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Post as ModelsPost;
use Illuminate\Support\Facades\File;
use App\Models\Author as ModelsAuthor;
use App\Models\Category as ModelsCategory;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class EditPost extends Component
{
    use LivewireAlert, WithFileUploads;

    // experience property
    public ModelsPost $post;

    // post Image property
    public $postImage;

    // get all authors
    public $authors;

    // categories property
    public $categories;


    // validation rules
    protected $rules = [
        'post.title' => ['required', 'string'],
        'post.author_id' => ['required', 'exists:authors,id'],
        'post.category_id' => ['required', 'exists:categories,id'],
        // 'post.summary' => ['required', 'string', 'max:120'],
        'post.body' => ['required', 'string'],
        'postImage' => ['nullable', 'image'],
        'post.status' => ['required'],
    ];

    public function mount()
    {
        $this->authors = ModelsAuthor::all();
        $this->categories = ModelsCategory::all();
    }

    public function updated($post)
    {
        $data = $this->validateOnly($post);
    }

    // Submit and save post
    public function submit()
    {
        $data = $this->validate()['post'];

        // if new image defined for post
        if ($this->postImage) {
            // image upload
            // set name for image to upload - current timestamp.image extension (1662656825.jpg)
            $postImageName = Carbon::now()->timestamp . '.' . $this->postImage->extension();
            // set image address in data['image'] field to save in database
            $data['image'] = "images/post/$postImageName";

            // image store method now save files into public_path() because config.filesystems.php : 'root' => public_path('images')  has changed
            // save image to public/images/post with the modified name
            $this->postImage->storeAs('post', $postImageName);

            // delete previous image from directory
            if (File::exists($this->post->image))
                File::delete($this->post->image);
        }

        // update post
        $this->post->update($data);
        $this->alert('success', 'Post updated successfully');
        return redirect()->route('admin.post');
    }

    // Save post and directly head to submit another post
    public function saveAndNew()
    {
        $data = $this->validate()['post'];

        // if new image defined for post
        if ($this->postImage) {
            // image upload
            // set name for image to upload - current timestamp.image extension (1662656825.jpg)
            $postImageName = Carbon::now()->timestamp . '.' . $this->postImage->extension();
            // set image address in data['image'] field to save in database
            $data['image'] = "images/post/$postImageName";

            // image store method now save files into public_path() because config.filesystems.php : 'root' => public_path('images')  has changed
            // save image to public/images/post with the modified name
            $this->postImage->storeAs('post', $postImageName);

            // delete previous image from directory
            if (File::exists($this->post->image))
                File::delete($this->post->image);
        }

        // update post
        $this->post->update($data);
        $this->alert('success', 'Post updated successfully');
        return redirect()->route('admin.post.add-post');
    }

    // Save post and directly head to edit the current saved post
    public function saveAndEdit()
    {
        $data = $this->validate()['post'];

        // if new image defined for post
        if ($this->postImage) {
            // image upload
            // set name for image to upload - current timestamp.image extension (1662656825.jpg)
            $postImageName = Carbon::now()->timestamp . '.' . $this->postImage->extension();
            // set image address in data['image'] field to save in database
            $data['image'] = "images/post/$postImageName";

            // image store method now save files into public_path() because config.filesystems.php : 'root' => public_path('images')  has changed
            // save image to public/images/post with the modified name
            $this->postImage->storeAs('post', $postImageName);

            // delete previous image from directory
            if (File::exists($this->post->image))
                File::delete($this->post->image);
        }

        // update post
        $this->post->update($data);
        $this->alert('success', 'Post updated successfully');
        return redirect()->route('admin.post.edit-post', $this->post);
    }


    public function render()
    {
        return view('livewire.admin.post.edit-post')
            ->layout('livewire.admin.layouts.master');
    }
}
