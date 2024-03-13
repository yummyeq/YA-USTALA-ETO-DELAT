<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Slaggable;

    public function tags()
    {
        return $this->$this->belongsToMany(Tag::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function sluggable(): array
    {
        return[
            'slug' => [
                'source' => 'title'
            ]
            ];
    }
 
}
