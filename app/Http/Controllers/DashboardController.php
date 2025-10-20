<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function getChartData()
    {
        return response()->json([
            'bars' => [
                ['purple' => 40, 'blue' => 30, 'teal' => 8, 'green' => 6, 'red' => 16],
                ['purple' => 45, 'blue' => 28, 'teal' => 7, 'green' => 6, 'red' => 14],
                // ... more bar data
            ]
        ]);
    }
}