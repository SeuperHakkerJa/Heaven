<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = "patients";

    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }

    public function tasks() {
        return $this->hasMany(Task::class);
    }
}
