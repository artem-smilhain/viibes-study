<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicDegree extends Model
{
    use HasFactory;

    protected $fillable = ['degree_title', 'degree_abbreviation', 'slug'];

    public static function boot()
    {
        parent::boot();
        static::creating(function($model)
        {
            $model->slug = \Str::slug($model->degree_abbreviation);
        });
        static::updating(function($model)
        {
            $model->slug = \Str::slug($model->degree_abbreviation);
        });
    }

    public function programs()
    {
        return $this->hasMany(Program::class);
    }
}
