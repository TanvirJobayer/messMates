<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class messMate extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'district',
        'status',
        'age',
    ];
}
