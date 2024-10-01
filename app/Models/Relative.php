<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relative extends Model
{
    use HasFactory;

    protected $fillable = ['last_name_ru', 'last_name', 'birth_name', 'name_ru', 'name', 'father_name',
        'gender_id', 'martial_status', 'email', 'phone', 'birth_date', 'birth_city', 'birth_country_id',
        'street', 'house', 'apartment', 'city', 'country_id', 'ps', 'actual_street', 'actual_house',
        'actual_apartment', 'actual_city', 'actual_country_id', 'actual_ps', 'citizenship', 'nationality',
        'passport', 'passport_issue_placr', 'passport_expiration_date', 'school_name', 'school_start_year',
        'school_finish_year'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
