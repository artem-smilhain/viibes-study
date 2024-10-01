<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'phone', 'email', 'type', 'page_route', 'utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term', 'ip_address'];
}
