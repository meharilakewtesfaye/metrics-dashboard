<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metric extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'mrr',
        'arpu',
        'active_users',
        'new_signups'
    ];

    protected $casts = [
        'date' => 'date',
        'mrr' => 'decimal:2',
        'arpu' => 'decimal:2'
    ];
}