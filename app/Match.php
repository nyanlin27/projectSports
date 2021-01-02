<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = [
        'name', 'match_date', 'match_time', 'team_id', 'otherteam_id', 'description',
    ];
    public function team()
    {
        return $this->belongsTo('App\Team');
    }
    public function otherteam()
    {
        return $this->belongsTo('App\Team', 'otherteam_id');
    }
    public function result()
    {
        return $this->hasOne('App\Result');
    }

}
