<?php

namespace App\Http\Livewire\Home\App;

use App\Models\Contact as ModelsContact;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Contact extends Component
{
    use LivewireAlert;
    public $author;



    public function mount($author)
    {
        $this->author = $author;
    }

    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'max:50'],
            'email' => ['required', 'email'],
            'message' => ['required', 'max:150'],
        ]);

        if ($validator->fails()) {
            return redirect('/#contact')
                ->withErrors($validator)
                ->withInput();
        }
        $validated = $validator->validated();
        $validated['ip_address'] = $request->ip();
        ModelsContact::query()->make($validated);


        return redirect('/#contact')->with('success', 'موفق');
    }

    public function render()
    {
        return view('livewire.home.app.contact');
    }
}
