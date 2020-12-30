<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'homegoal', 'awaygoal','hometeam_id', 'awayteam_id', 'match_id',
    ];
    public function match()
    {
        return $this->belongsTo('App\Match');
    }
}
