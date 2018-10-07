<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = "doctors";

    public function patients() {
        return $this->hasMany(Patient::class);
    }

    public function schedules() {
        return $this->hasMany(Schedule::class);
    }
}
