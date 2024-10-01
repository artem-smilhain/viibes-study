<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    use HasFactory;

    protected $fillable = ['lesson_id', 'date_created_at', 'deadline_at', 'homework', 'reply', 'grade'];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
    public function setDateCreatedAtAttribute($date)
    {
        $this->attributes['date_created_at'] = date('Y-m-d H:i:s', strtotime($date));
    }
    public function setDeadlineAtAttribute($date)
    {
        $this->attributes['deadline_at'] = date('Y-m-d H:i:s', strtotime($date));
    }
}
