<?php

namespace App\Models;

use App\Models\Catogory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function catogory(){
            return $this->belongsTo(Catogory::class);
    }
}
