<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    public $timestamps = false;

    public function paciente() 
    {
        return $this->hasOne('App\Paciente');
    }

    public function ficha() 
    {
        return $this->hasOne('App\Ficha');
    }
}
