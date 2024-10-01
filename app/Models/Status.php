<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'element_color'];

    public function programs()
    {
        return $this->belongsToMany(Program::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'program_status', 'status_id', 'user_id');
    }
}
