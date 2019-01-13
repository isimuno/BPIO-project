<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    protected $fillable = ['name', 'county_id'];

    public function county()
    {
        return $this->belongsTo(\App\County::class);
    }
    public function place()
    {
        return $this->hasMany(\App\Place::class);
    }
}
