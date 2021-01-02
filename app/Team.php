<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Team extends Model
{
    protected $fillable = [
        'name', 'photo', 'league_id',
    ];
    public function league()
    {
        return $this->belongsTo('App\League');
    }
}
