<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    //

    protected $fillable = [
        'packages_id', 'user_id','count',
    ];

     public function package()
    {
        return $this->belongsTo('App\Packages');
    } 
    public function user()
    {
        return $this->belongsTo('App\User');
    } 
}
