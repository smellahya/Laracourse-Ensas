<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    //
    protected $fillable = [
        'chapter',
        'chapter_file_link',
        'description',
        'subject_id'
    ];



    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
