<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = 'phones';
    protected $fillable = [
        'user_id','phone',
    ];

    public function users(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
