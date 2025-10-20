<?php

namespace Database\Seeders;

use App\Models\Metric;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class MetricSeeder extends Seeder
{
    public function run()
    {
        $startDate = Carbon::now()->subDays(90);
        
        for ($i = 0; $i < 90; $i++) {
            Metric::create([
                'date' => $startDate->copy()->addDays($i),
                'mrr' => rand(50000, 100000) + (rand(0, 100) / 100),
                'arpu' => rand(50, 150) + (rand(0, 100) / 100),
                'active_users' => rand(1000, 5000),
                'new_signups' => rand(50, 200),
            ]);
        }
    }
}