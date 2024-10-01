<?php

namespace App\Models;

use App\services\UserService;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use phpDocumentor\Reflection\Types\Integer;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    const STATUS_WAIT = 10;
    const STATUS_ACTIVE = 20;

    const GENDER_ID_MALE = 1;
    const GENDER_ID_FEMALE = 2;

    const MARITAL_STATUS_MARRIED = 1;
    const MARITAL_STATUS_SINGLE = 2;
    const MARITAL_STATUS_CIVIL_MARRIAGE = 3;
    const MARITAL_STATUS_DIVORCED = 4;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'name_ru',
        'last_name',
        'last_name_ru',
        'birth_name',
        'father_name',
        'martial_status_id',
        'email',
        'password',
        'phone',
        'birth_date',
        'birth_city',
        'birth_country_id',
        'citizenship',
        'status_id',
        'country_id',
        'city',
        'street',
        'house',
        'apartment',
        'ps',
        'gender_id',
        'actual_street',
        'actual_house',
        'actual_apartment',
        'actual_city',
        'actual_country_id',
        'actual_ps',
        'nationality',
        'passport',
        'passport_issue_place',
        'passport_expiration_date',
        'school_name',
        'school_start_year',
        'school_finish_year',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'role_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function birth_country()
    {
        return $this->belongsTo(Country::class,  'birth_country_id', 'id');
    }
    public function actual_country()
    {
        return $this->belongsTo(Country::class,  'actual_country_id', 'id');
    }
    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
    public function programs()
    {
        return $this->belongsToMany(Program::class);
    }
    public function relatives()
    {
        return $this->belongsToMany(Relative::class);
    }
    public function programStatuses()
    {
        return $this->belongsToMany(Status::class, 'program_status', 'user_id', 'status_id');
    }
    public function programStatusesByProgram(Program $program)
    {
        return $this->programStatuses()->wherePivot('program_id', $program->id)->withPivot('created_at');
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
    public function scopeFilter($query, $request)
    {
        if (isset($request->name)) {
            $query->where('name', $request->name);
        }
        if (isset($request->status)) {
            $query->where('status_id', $request->status);
        }
        if (isset($request->email)) {
            $query->where('email', $request->email);
        }
        return $query;
    }
    public static function getStatuses()
    {
        return [
            User::STATUS_WAIT => 'wait',
            User::STATUS_ACTIVE => 'active',
        ];
    }
    public function getGenderAttribute()
    {
        $genders = self::getGenders();
        return $genders[$this->gender_id] ?? '';
    }
    public function setBirthDateAttribute($date)
    {
        $this->attributes['birth_date'] = date('Y-m-d', strtotime($date));
    }
    public function setPassportExpirationDateAttribute($date)
    {
        $this->attributes['passport_expiration_date'] = date('Y-m-d', strtotime($date));
    }
    public static function getGenders()
    {
        return [
            User::GENDER_ID_MALE => __('app.male'),
            User::GENDER_ID_FEMALE => __('app.female'),
        ];
    }
    public function getMartialStatusAttribute()
    {
        $martialStatuses = self::getMartialStatuses();
        return $martialStatuses[$this->martial_status_id] ?? '';
    }
    public static function getMartialStatuses()
    {
        return [
            User::MARITAL_STATUS_MARRIED => 'Замужем/женат',
            User::MARITAL_STATUS_SINGLE => 'Не замужем/холост',
            User::MARITAL_STATUS_CIVIL_MARRIAGE => 'В гражданском браке',
            User::MARITAL_STATUS_DIVORCED => 'Разведена/pазведен',
        ];
    }
    public function hasRelative(Relative $relative)
    {
        return $this->relatives->contains($relative);
    }
    public function getLatestStatusIdByProgram(Program $program): ?int
    {
        $status_id = ProgramStatus::where('program_id', $program->id)->where('user_id', $this->id)->latest()->first()->status_id ?? null;
        return $status_id;
    }
    public function paymentsByService($service_id)
    {
        return $this->payments()->where('service_id', $service_id)->get();
    }
}
