<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'course_id', 'start_at', 'meeting_link', 'description', 'notes', 'video_link'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function homeworks()
    {
        return $this->hasMany(Homework::class);
    }
    public function setStartAtAttribute($date)
    {
        $this->attributes['start_at'] = date('Y-m-d H:i:s', strtotime($date));
    }
}
