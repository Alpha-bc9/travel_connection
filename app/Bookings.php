<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    //
    protected $fillable = [
        'package_id', 'user_id', 'booking_date','booking_status'
    ];
    public function package()
    {
        return $this->belongsTo('App\Packages','package_id');
    }
     public function user()
    {
        return $this->belongsTo('App\User');
    }
}
