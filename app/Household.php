<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Household extends Model
{
    public function contacts()
    {
        return $this->hasMany('App\Contact', 'Household_ID');
    }
}
