<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    protected $table = 'claim';
    protected $fillable = ['pet_id','user_id','filename','witness_email','witness_name','witness_contact','is_delete'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function pet()
    {
        return $this->belongsTo('App\Pet', 'pet_id');
    }
}
