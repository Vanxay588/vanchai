<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Services\ChartsService;

class DashboardApiController extends Controller
{
    public function index()
    {
        $stats0 = new ChartsService([
            'title'        => 'All Annoucement',
            'chart_type'   => 'stats',
            'model'        => 'App\Models\Annoucement',
            'column_class' => 'col-md-3',
            'footer_icon'  => 'date_range',
            'footer_text'  => 'Lifetime total',
        ]);

        $stats1 = new ChartsService([
            'title'        => 'All Policy',
            'chart_type'   => 'stats',
            'model'        => 'App\Models\Policy',
            'column_class' => 'col-md-3',
            'footer_icon'  => 'date_range',
            'footer_text'  => 'Lifetime total',
        ]);

        $stats2 = new ChartsService([
            'title'        => 'All Download',
            'chart_type'   => 'stats',
            'model'        => 'App\Models\Download',
            'column_class' => 'col-md-3',
            'footer_icon'  => 'date_range',
            'footer_text'  => 'Lifetime total',
        ]);

        $stats3 = new ChartsService([
            'title'        => 'All User',
            'chart_type'   => 'stats',
            'model'        => 'App\Models\User',
            'column_class' => 'col-md-3',
            'footer_icon'  => 'date_range',
            'footer_text'  => 'Lifetime total',
        ]);


        return response()->json(compact('stats0', 'stats1', 'stats2', 'stats3'));
    }
}
