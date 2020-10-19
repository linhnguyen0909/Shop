<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model

{
    protected $table = 'articles';
    protected $fillable = [
        'title', 'slug', 'body',
    ];

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function set_best_comment($comment)
    {
        $this->best_comment_id = $this->id;
        return $this->save;
    }
}
