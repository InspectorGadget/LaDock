<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Container extends Model
{

    protected $fillable = ['container_id', 'user_id'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

}
