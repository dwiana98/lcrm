<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = "jadwal";
    public $timestamps = false;

    public function Day()
    {
        return $this->belongsTo('App\Models\Day');
    }
}
