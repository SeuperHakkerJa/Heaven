<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    public function patient() {
        return $this->belongsTo(Patient::class);
    }

    public function record() {
        return $this->hasOne(Record::class);
    }
}
