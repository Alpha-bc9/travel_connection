<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Companies extends Authenticatable
{
	use HasRoles;
	protected $guard_name='company';

    protected $fillable = [
    	'name','email','password','phone','website','address','logo'
       ];
}




	