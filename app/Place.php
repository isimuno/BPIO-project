<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = ['name', 'municipality_id'];

    public function municipality()
    {
        return $this->belongsTo(\App\Municipality::class);
    }
    public function pensioner()
    {
        return $this->hasMany(\App\Pensioner::class);
    }
}
