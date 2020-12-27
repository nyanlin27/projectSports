<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = [
        'name', 'photo', 'league_id','team_id',
    ];
}
