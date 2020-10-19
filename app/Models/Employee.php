<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function transactions()
    {
        return $this->hasMany('App\Models\Transaction');
    }
}
