<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class React extends Model
{
    protected $table = 'reacts';
    protected $fillable = ['blog_id','user_id'];
}
