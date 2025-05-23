<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'content', 'image', 'status', 'category_id', 'user_id'
    ];

    protected $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return asset('images/placeholder.jpg');
        }
        return asset('storage/' . $this->image);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

// app/Models/Article.php

public function categorie()
{
    return $this->belongsTo(Categorie::class, 'category_id');
}


    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }


    public function comments()
{
    return $this->hasMany(Comment::class);
}

public function ratings()
{
    return $this->hasMany(Rating::class);
}

}
