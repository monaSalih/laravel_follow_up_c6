<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Catogory extends Model
{
    protected $fillable=[
        'name',
        'photo',
        'status',
        'is_deleted',
    ];

    public function product(){
        return $this->hasMany(Product::class);
    }
}
