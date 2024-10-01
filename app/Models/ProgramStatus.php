<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramStatus extends Model
{
    use HasFactory;
    protected $table = 'program_status';
    protected $fillable = ['program_id', 'status_id', 'user_id'];
}
