<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model
{
    public $timestamps = false;

    public function posts() {
        return $this->hasMany(Post::class);
    }    
}
