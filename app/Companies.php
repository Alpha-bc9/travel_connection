<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $fillable = [
    	'name','email','password','phone','website','address','logo'
    ];
    public function packages()
    {
    	return $this->hasMany('App\Packages');
    }
}
