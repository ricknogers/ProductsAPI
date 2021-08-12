<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'application',
        'market_id',
        'description',
        'product_range',
        'inci_name',
        'percent_active',
        'recommended_dosage',

    ];
}
