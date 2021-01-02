<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'match_id', 'hometeam_id', 'awayteam_id', 'home_goal', 'away_goal',
    ];
    public function match()
    {
        return $this->belongsTo('App\Match');
    }
}
