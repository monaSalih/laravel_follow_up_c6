<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catogory extends Model
{
    protected $fillable=[
        'name',
        'photo',
        'status',
        'is_deleted',
    ];
}
