<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function developers() {
        return $this->belongsToMany(Developer::class);
    }
}
