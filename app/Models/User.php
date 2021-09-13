<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use Hash;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasAdvancedFilter;
    use Notifiable;
    use HasFactory;

    public const GENDER_RADIO = [
        [
            'label' => 'ຊາຍ',
            'value' => 'ຊາຍ',
        ],
        [
            'label' => 'ຍິງ',
            'value' => 'ຍິງ',
        ],
    ];

    public $table = 'users';

    protected $appends = [
        'gender_label',
    ];

    protected $hidden = [
        'remember_token',
        'password',
    ];

    protected $dates = [
        'date_of_birth',
        'email_verified_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $orderable = [
        'id',
        'name',
        'surname',
        'gender',
        'date_of_birth',
        'email',
        'email_verified_at',
    ];

    protected $filterable = [
        'id',
        'name',
        'surname',
        'gender',
        'date_of_birth',
        'email',
        'email_verified_at',
        'roles.title',
    ];

    protected $fillable = [
        'name',
        'surname',
        'gender',
        'date_of_birth',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getIsAdminAttribute()
    {
        return $this->roles()->where('title', 'Admin')->exists();
    }

    public function getGenderLabelAttribute()
    {
        return collect(static::GENDER_RADIO)->firstWhere('value', $this->gender)['label'] ?? '';
    }

    public function getDateOfBirthAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.date_format')) : null;
    }

    public function setDateOfBirthAttribute($value)
    {
        $this->attributes['date_of_birth'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getEmailVerifiedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function setEmailVerifiedAtAttribute($value)
    {
        $this->attributes['email_verified_at'] = $value ? Carbon::createFromFormat(config('project.datetime_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function setPasswordAttribute($input)
    {
        if ($input) {
            $this->attributes['password'] = Hash::needsRehash($input) ? Hash::make($input) : $input;
        }
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}