<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedules';

    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }
}
