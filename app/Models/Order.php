<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $appends = ['user'];

    public function getUserAttribute()
    {
        return User::where('id',$this->user_id)->first();
    }
}
