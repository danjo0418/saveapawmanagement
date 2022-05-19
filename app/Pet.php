<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $table = 'pets';
    protected $fillable = ['user_id','status','name','breed','color','gender','age','description','filename','is_approved','is_claim','is_adapt'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
