<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    protected $fillable = ['continent_name', 'number_of_countries', 'native_name'];

    public function counties()
    {
        return $this->hasMany(\App\County::class);
    }

}

