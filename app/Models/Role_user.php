<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;

class Role_user extends Model
{
    use HasUuid;
    protected $fillable = ['user_id','role_id'];
}
