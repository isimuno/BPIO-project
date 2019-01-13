<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PensionType extends Model
{
    protected $fillable = ['id', 'name'];

    public function pensioner()
    {
        return $this->hasMany(\App\Pensioner::class);
    }
}
