<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['blog_id','user_id','message'];

    public function owner()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
