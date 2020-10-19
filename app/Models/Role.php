<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasUuid;

    protected $table = 'roles';
    protected $fillable = ['name'];

    public function users()
    {
        return $this->belongsToMany(User::class,'role_users');
    }
}
