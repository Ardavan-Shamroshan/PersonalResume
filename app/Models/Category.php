<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
     public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function categoryStatus(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->status == 0 ? 'غیر فعال' : 'فعال',
        );
    }
}
