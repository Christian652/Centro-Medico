<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function category()
    {
        return MessageCategory::where('id', $this->categoryId);
    }
}
