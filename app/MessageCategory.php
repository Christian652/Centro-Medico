<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageCategory extends Model
{
    public $timestamps = false;

    public function messages()
    {
        return $this->hasMany('App\Message');
    }
}
