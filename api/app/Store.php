<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function address(){
        return $this->belongsTo(Address::class);
    }
}
