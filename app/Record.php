<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $table = 'records';

    public function patient() {
        return $this->belongsTo(Patient::class);
    }
}
