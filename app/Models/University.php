<?php

namespace App\Models;

use App\Models\University\Picture;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name_sk',
        'abbreviation',
        'abbreviation_sk',
        'description',
        'founding_year',
        'address',
        'address_sk',
        'site_url',
        'number_of_students',
        'logo_src',
        'thumbnail_src',
        'google_map_src',
        'education_cost_en',
        'scholarships',
        'row_weight',
        'slug',
        'city_id',
        'content_heading',
        'content_text',
        'content_img_src',
        'faculties_description',
        'meta_title',
        'meta_description',
    ];
    public static function boot()
    {
        parent::boot();
        static::creating(function($model)
        {
            $model->slug = \Str::slug($model->name);
        });
        static::updating(function($model)
        {
            $model->slug = \Str::slug($model->name);
        });
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function groups()
    {
        return $this->belongsToMany(Group::class);
    }
    public function faculties()
    {
        return $this->hasMany(Faculty::class);
    }
    public function getPicturesForDropzone()
    {
        $output = [];
        $pictures = $this->pictures()->orderBy('id', 'DESC')->get();
        foreach ($pictures as $picture) {
            if (\Storage::disk('public')->exists($picture->image_src)) {
                $size = \Storage::disk('public')->size($picture->image_src);
                if ($size) {
                    $output[] = ['name' => $picture->image_src, 'size' => $size];
                }
            }
        }
        return $output;
    }

    public static array $photos_count = [
        'TUKE' => 15,
        'STU' => 9,
        'UPJŠ' => 10,
        'UMB' => 6,
        'EUBA' => 9,
        'UNIZA' => 12,
        'PU' => 4,
        'TUAD' => 9,
        'UK' => 9,
        'TU' => 6,
        'UVLF' => 3,
        'AU' => 0,
        'VŠMU' => 0,
        'TUZ' => 6,
        'SPU' => 2,
        'SZU' => 0,
        'UCM' => 0,
        'UKF' => 0,
        'VSVU' => 0,
        'KU' => 6
    ];
}
