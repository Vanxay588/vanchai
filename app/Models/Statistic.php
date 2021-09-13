<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Statistic extends Model implements HasMedia
{
    use HasAdvancedFilter;
    use InteractsWithMedia;
    use HasFactory;

    public $table = 'statistics';

    protected $appends = [
        'statistic',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $orderable = [
        'id',
        'name',
        'categories.categories',
    ];

    protected $filterable = [
        'id',
        'name',
        'categories.categories',
    ];

    protected $fillable = [
        'name',
        'categories_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getStatisticAttribute()
    {
        return $this->getMedia('statistic_statistic')->map(function ($item) {
            $media = $item->toArray();
            $media['url'] = $item->getUrl();

            return $media;
        });
    }

    public function categories()
    {
        return $this->belongsTo(StatisticCategory::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
