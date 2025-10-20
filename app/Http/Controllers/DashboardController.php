<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function getMetricsData(Request $request)
    {
        return response()->json([
            'success' => true,
            'data' => [
                'mrr' => [
                    'total' => 14775,
                    'breakdown' => [
                        'new_mrr' => 14775,
                        'upgrades' => 13000,
                        'downgrades' => 755,
                    ]
                ],
                'arpu' => [
                    'total' => 10000,
                    'breakdown' => [
                        'reactivations' => 10000,
                        'existing' => 10000,
                        'churn' => 100,
                    ]
                ],
            ]
        ]);
    }
}