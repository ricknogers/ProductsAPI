<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    use HasFactory;
    protected $fillable = [
        'marketName', 'description', 'marketImage', 'linkedinURL', 'orderNumber'
    ];

    public function products(){
        return $this->hasOne(Products::class);
    }

}

