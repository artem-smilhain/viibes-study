<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'name_sk', 'description', 'university_id', 'slug'];

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
    public function university()
    {
        return $this->belongsTo(University::class);
    }
    public function programs()
    {
        return $this->hasMany(Program::class);
    }
}
