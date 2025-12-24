<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct()
    {
        $defaultColor = (object)[
            'primary' => '#0d6efd',
            'secondary' => '#6c757d',
            'text' => '#212529',
            'bg' => '#ffffff',
        ];

        if (!Schema::hasTable('colors')) {
            View::share(['color' => $defaultColor]);
            return;
        }

        $color = Color::first() ?? $defaultColor;

        View::share(['color' => $color]);
    }
}
