<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'name_sk', 'row_weight', 'post_id', 'country_id', 'slug', 'content_heading', 'content_text', 'content_img_src', 'meta_title', 'meta_description'];

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

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public function universities()
    {
        return $this->hasMany(University::class);
    }
}
