<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasUuid;

    protected $fillable = ['book_id', 'user_id'];
    public $timestamps = false;
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
