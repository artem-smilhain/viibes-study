<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name_sk'];

    use HasFactory;

    const SLOVAKIA_ID = 197;

    public function getNameAttribute()
    {
        return __('app.' . $this->name_sk);
    }
}
