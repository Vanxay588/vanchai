<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class ExaminationResult extends Model implements HasMedia
{
    use HasAdvancedFilter;
    use InteractsWithMedia;
    use HasFactory;

    public $table = 'examination_results';

    protected $appends = [
        'examination_result',
    ];

    protected $orderable = [
        'id',
        'academic_years',
        'name',
    ];

    protected $filterable = [
        'id',
        'academic_years',
        'name',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'academic_years',
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getExaminationResultAttribute()
    {
        return $this->getMedia('examination_result_examination_result')->map(function ($item) {
            $media = $item->toArray();
            $media['url'] = $item->getUrl();

            return $media;
        });
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}