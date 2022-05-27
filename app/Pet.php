<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $table = 'pets';
    protected $fillable = ['user_id','status','name','breed','color','gender','age','description','is_vaccinated','filename','is_approved','is_claim','is_adopt'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
