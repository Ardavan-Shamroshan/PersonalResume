<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skill extends Model
{
    use HasFactory, SoftDeletes;

    // only unable to fill id
    protected $guarded = ['id'];

    /**
     * Get the skill's category.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
