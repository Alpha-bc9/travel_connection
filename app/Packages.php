<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    //
    protected $fillable = [
        'company_id', 'departure', 'destination','name','photo','price','duration','hotel','meal','description','like'
    ];
    public function bookings()
    {
        return $this->hasMany('App\Bookings');
    }
    public function departurecity()
    {
        return $this->belongsTo('App\Cities','departure');
    }
    public function destinationcity()
    {
        return $this->belongsTo('App\Cities','destination');
    }
   
}
