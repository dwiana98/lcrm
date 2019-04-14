<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    protected $table = "days";
    public $timestamps = false;

    public function jadwals()
    {
        return $this->hasMany('App\Models\jadwal');
    }
}
