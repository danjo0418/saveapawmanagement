<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adopt extends Model
{
    protected $table = 'adopt';
    protected $fillable = ['pet_id','user_id','no_pet','reason','id_type','id_no','filename','is_delete'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function pet()
    {
        return $this->belongsTo('App\Pet', 'pet_id');
    }
}
