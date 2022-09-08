<?php

namespace App\Models;

use App\Models\Author;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experience extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function experienceStatus(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->status == 0 ? 'غیر فعال' : 'فعال',
        );
    }

    public function author() {
        return $this->belongsTo(Author::class);
    }
}
