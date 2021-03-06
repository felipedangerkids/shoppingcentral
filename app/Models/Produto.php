<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produto extends Model
{
    use HasSlug;

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    protected $fillable = [
      'est_id', 'user_id', 'image', 'name', 'slug', 'desc', 'price', 'time', 'category_id'
    ];

    public function estabelecimento()
    {
        return $this->belongsTo(Estabelecimento::class, 'est_id');
    }

    public function categoria()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
