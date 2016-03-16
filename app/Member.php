<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['name', 'address', 'joined_at', 'age', 'photo'];

    protected $dates = ['joined_at'];

    public function scopeJoined($query)
    {
        $query->where('joined_at', '<=', Carbon::now());
    }

    public function scopeUnJoined($query)
    {
        $query->where('joined_at', '=>', Carbon::now());
    }

    public function setJoinedAtAttribute($date)
    {
        $this->attributes['joined_at'] = Carbon::parse($date);
    }
}
