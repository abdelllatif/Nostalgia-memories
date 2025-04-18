<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Article;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function products()
    {
        return $this->morphedByMany(Product::class, 'taggable');
    }

    public function posts()
{
    return $this->morphedByMany(Article::class, 'taggable');
}
public function articles()
{
    return $this->belongsToMany(Article::class,'article_tag');
}
}
