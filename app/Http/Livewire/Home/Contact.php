<?php

namespace App\Http\Livewire\Home;

use Illuminate\Http\Request;
use Livewire\Component;

class Contact extends Component
{
    // Save and submit the contact form
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'contact.name' => 'required|string|max:25',
            'contact.email' => 'required|email|max:64',
            'contact.message' => 'required|string|max:150',
        ]);

        dd($validated);
    }

    public function render()
    {
        return view('livewire.home.contact');
    }
}
