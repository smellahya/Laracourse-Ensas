<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    //



    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
