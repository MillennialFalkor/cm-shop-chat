<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAttribute extends Model
{
    protected $fillable = [
        'user_id', 'attr_name', 'attr_value',
    ];
}
