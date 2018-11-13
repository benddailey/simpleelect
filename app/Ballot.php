<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ballot extends Model
{
    protected $fillable = [
        'name',
        'open_at',
        'close_at',
        'close',
    ];

    public function question(){
        $this->hasMany(Question::class);
    }
}
