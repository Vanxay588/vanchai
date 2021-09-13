<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Policy extends Model implements HasMedia
{
    use HasAdvancedFilter;
    use InteractsWithMedia;
    use HasFactory;

    public $table = 'policies';

    protected $appends = [
        'policy',
    ];

    protected $dates = [
        'allow_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $orderable = [
        'id',
        'name',
        'categories.categories',
        'level_no',
        'allow_date',
    ];

    protected $filterable = [
        'id',
        'name',
        'categories.categories',
        'level_no',
        'allow_date',
    ];

    protected $fillable = [
        'name',
        'categories_id',
        'level_no',
        'allow_date',
        'description',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getPolicyAttribute()
    {
        return $this->getMedia('policy_policy')->map(function ($item) {
            $media = $item->toArray();
            $media['url'] = $item->getUrl();

            return $media;
        });
    }

    public function categories()
    {
        return $this->belongsTo(PolicyCategory::class);
    }

    public function getAllowDateAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.date_format')) : null;
    }

    public function setAllowDateAttribute($value)
    {
        $this->attributes['allow_date'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
