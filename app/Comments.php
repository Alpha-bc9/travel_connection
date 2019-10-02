<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    //
    protected $fillable = [
        'package_id', 'user_id','description',
    ];

     public function package()
    {
        return $this->belongsTo('App\Packages');
    } 

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
