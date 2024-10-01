<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'deadline', 'is_paid', 'amount', 'service_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function setDeadlineAttribute($date)
    {
        $this->attributes['deadline'] = date('Y-m-d', strtotime($date));
    }
}
