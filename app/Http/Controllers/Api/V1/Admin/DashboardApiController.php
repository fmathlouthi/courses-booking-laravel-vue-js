<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Services\ChartsService;

class DashboardApiController extends Controller
{
    public function index()
    {
        $bar0 = new ChartsService([
            'title'            => 'course weekly report',
            'chart_type'       => 'bar',
            'model'            => 'App\Models\CourseOrder',
            'group_by_field'   => 'created_at',
            'group_by_period'  => 'day',
            'column_class'     => 'col-md-12',
            'filter_by_field'  => 'created_at',
            'filter_by_period' => 30,
        ]);
        $line0 = new ChartsService([
            'title'           => 'New user',
            'chart_type'      => 'line',
            'model'           => 'App\Models\User',
            'group_by_field'  => 'created_at',
            'group_by_period' => 'day',
            'column_class'    => 'col-md-6',
        ]);
        $line1 = new ChartsService([
            'title'           => 'pathways university',
            'chart_type'      => 'line',
            'model'           => 'App\Models\Pathway',
            'group_by_field'  => 'created_at',
            'group_by_period' => 'week',
            'column_class'    => 'col-md-6',
        ]);

        $pie2 = new ChartsService([
            'title'           => 'course weekly',
            'chart_type'      => 'pie',
            'model'           => 'App\Models\WeeklyCourse',
            'group_by_field'  => 'created_at',
            'group_by_period' => 'week',
            'column_class'    => 'col-md-6',
        ]);

        $bar3 = new ChartsService([
            'title'           => 'pathway',
            'chart_type'      => 'bar',
            'model'           => 'App\Models\UnivercityCourse',
            'group_by_field'  => 'created_at',
            'group_by_period' => 'day',
            'column_class'    => 'col-md-6',
        ]);

        $stats4 = new ChartsService([
            'title'        => ' Subject Program university',
            'chart_type'   => 'stats',
            'model'        => 'App\Models\SubjectProgram',
            'column_class' => 'col-md-6',
            'footer_icon'  => 'date_range',
            'footer_text'  => 'Lifetime total',
        ]);

        $latest5 = new ChartsService([
            'title'        => 'top Weekly Accommodation',
            'chart_type'   => 'latest',
            'model'        => 'App\Models\WeeklyAccommodation',
            'column_class' => 'col-md-6',
            'fields'       => ['name'],
            'limit'        => 5,
        ]);


        return response()->json(compact('bar0','line1', 'line0', 'pie2', 'bar3', 'stats4', 'latest5'));
    }
}
