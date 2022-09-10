<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Post as ModelsPost;
use App\Models\Category as ModelsCategory;
use App\Models\Project as ModelsProject;
use App\Models\Skill as ModelsSkill;
use App\Models\Experience as ModelsExperience;
use App\Models\Author as ModelsAuthor;
use App\Models\Setting as ModelsSetting;

class AdminDashboard extends Component
{
    public function render()
    {
        // all data
        $posts = ModelsPost::all();
        $categories = ModelsCategory::all();
        $projects = ModelsProject::all();
        $skills = ModelsSkill::all();
        $authors = ModelsAuthor::all();
        $experiences = ModelsExperience::all();
        $setting = ModelsSetting::first();

        // latests
        $latestPost = ModelsPost::latest()->first();
        $latestCategory = ModelsCategory::latest()->first();
        $latestProject = ModelsProject::latest()->first();
        $latestSkill = ModelsSkill::latest()->first();
        $latestAuthor = ModelsAuthor::latest()->first();
        $latestExperience = ModelsExperience::latest()->first();

        return view('livewire.admin.admin-dashboard', [
            'posts' => $posts,
            'categories' => $categories,
            'projects' => $projects,
            'skills' => $skills,
            'authors' => $authors,
            'experiences' => $experiences,
            'setting' => $setting,


            'latestPost' => $latestPost,
            'latestCategory' => $latestCategory,
            'latestProject' => $latestProject,
            'latestSkill' => $latestSkill,
            'latestAuthor' => $latestAuthor,
            'latestExperience' => $latestExperience,
        ])
            ->layout('livewire.admin.layouts.master');
    }
}
