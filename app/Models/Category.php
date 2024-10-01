<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'element_color', 'description'];

    public static function boot()
    {
        parent::boot();
        static::creating(function($model)
        {
            $model->slug = \Str::slug($model->name);
        });
        static::updating(function($model)
        {
            $model->slug = \Str::slug($model->name);
        });
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
