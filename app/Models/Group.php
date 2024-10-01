<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'name_sk', 'element_color', 'row_weight', 'slug', 'content_heading', 'content_text', 'content_img_src', 'meta_title', 'meta_description'];

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

    public function universities()
    {
        return $this->belongsToMany(University::class);
    }

}
