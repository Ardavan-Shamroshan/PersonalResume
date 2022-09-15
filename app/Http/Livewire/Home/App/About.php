<?php

namespace App\Http\Livewire\Home\App;

use Livewire\Component;

class About extends Component
{
    public $author;

    public function mount($author)
    {
        $this->author = $author;
    }

    public function render()
    {
        $skills = $this->author->skills()->where('status', 1)->get();
        $experiences = $this->author->experiences()->where('status', 1)->get();

        $birthYear = $this->author->birth_date - 620;
        $birthDate = "31 خرداد $birthYear";
        return view('livewire.home.app.about', [
            'skills' => $skills,
            'experiences' => $experiences,
            'birthDate' => $birthDate,
        ]);
    }
}
