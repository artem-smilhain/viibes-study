<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = ['name_sk', 'name', 'description', 'years_of_study', 'is_in_combination', 'academic_degree_id',
        'faculty_id', 'direction_id', 'direction_2_id', 'slug'];

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

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
    public function direction()
    {
        return $this->belongsTo(Direction::class);
    }
    public function direction_2()
    {
        return $this->belongsTo(Direction::class);
    }
    public function academicDegree()
    {
        return $this->belongsTo(AcademicDegree::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function statuses()
    {
        return $this->belongsToMany(Status::class);
    }
}
