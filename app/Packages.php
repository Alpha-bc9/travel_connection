<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    protected $fillable = [
    	'company_id','name','photo','price','duration','hotel','meal','description','like','destination_id','departure_id'
    ];
    public function booking()
    {
    	return $this->hasMany('App\Booking');
    }
    public function company()
    {
    	return $this->belongsTo('App\Companies');
    }

    public function numberoflikes()
    {
        return $this->hasMany('App\Likes');

    }
    public function comments()
    {
        return $this->hasMany('App\Comments');
        
    }

    

}
