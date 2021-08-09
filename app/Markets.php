<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Markets extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'linkedin_url',
        'order_number',



    ];
}
