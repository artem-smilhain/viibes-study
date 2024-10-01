<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'thumbnail_src', 'content', 'slug', 'category_id', 'status', 'description', 'is_pinned'];

    public static function boot()
    {
        parent::boot();
        static::creating(function($model)
        {
            $model->slug = \Str::slug($model->title);
        });
        static::updating(function($model)
        {
            $model->slug = \Str::slug($model->title);
        });
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
