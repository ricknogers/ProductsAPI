<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
  

    protected $fillable = [
        'name',
        'application',
        'market_association',
        'product_category',
        'product_range',
        'description_uses',
        'inci_name',
        'percent_active',
        'recommended_dosage',


    ];
}
