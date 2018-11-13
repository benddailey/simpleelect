<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'code',
        'text',
        'ballot_id',
    ];

    public function ballot(){
        return $this->belongsTo(Ballot::class);
    }
}
