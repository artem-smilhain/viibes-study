<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_name',
        'avatar_src',
        'video_src',
        'preview_src',
        'image_src',
        'image_place_name',
        'instagram_url',
        'is_interview',
        'content',
        'university_id',
        'row_weight',
        'is_shown'
    ];

    public function university()
    {
        return $this->belongsTo(University::class);
    }

}

