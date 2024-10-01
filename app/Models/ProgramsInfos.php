<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramsInfos extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'program_sk',
        'program',
        'years_of_study',
        'exams',
        'study_plan_link',
        'study_plan_file',
        'description',
        'slug',
        'university'
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function($model)
        {
            $model->slug = \Str::slug(date('YmdHis'));
        });
    }

}
