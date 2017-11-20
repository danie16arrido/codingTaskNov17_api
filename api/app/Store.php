<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'id',
        'name',
        'siteid',
        'address_id',
        'phone_number',
        'cfs_flag'
    ];

    public function address(){
        return $this->belongsTo(Address::class);
    }
}
