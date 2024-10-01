<?php

namespace App\Models\University;

use App\Models\University;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;
    public $table = 'university_pictures';
    protected $fillable = ['image_src', 'university_id'];

    public function university()
    {
        return $this->belongsTo(University::class);
    }
}
