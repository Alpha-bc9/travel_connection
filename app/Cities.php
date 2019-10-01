<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    //
    public function packages()
    {
        return $this->hasMany('App\Packages');
    }


}
