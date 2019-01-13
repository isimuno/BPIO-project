<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pensioner extends Model
{
    protected $fillable = ['name', 'lastname', 'sex', 'date_of_birth', 'year_carer', 'amount_pension', 'pension_type_id', 'place_id'];

    public function place()
    {
        return $this->belongsTo(\App\Place::class);
    }

    public function PensionType()
    {
        return $this->belongsTo(\App\PensionType::class);
    }
}
