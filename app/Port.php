<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Port extends Model
{

    protected $fillable = ['port', 'in_use'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

}
