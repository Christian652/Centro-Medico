<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    public $timestamps = false;

    public function especialidade()
    {
        return $this->belongsTo(Especialidade::class);
    }
}
