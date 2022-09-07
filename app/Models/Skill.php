<?php

namespace App\Models;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
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

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function skillStatus(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->status == 0 ? 'غیر فعال' : 'فعال',
        );
    }
    public function progressBarBG(): Attribute
    {
        return Attribute::make(
            get: function () {
                if ($this->level >= 50 && $this->level <= 60)
                    return 'bg-danger';
                else if ($this->level >= 61 && $this->level <= 70)
                    return 'bg-warning';
                else if ($this->level >= 71 && $this->level <= 80)
                    return 'bg-info';
                else if ($this->level >= 81 && $this->level <= 100)
                    return 'bg-success';
            }
        );
    }
}
