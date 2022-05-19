<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adopt extends Model
{
    protected $table = 'adopt';
    protected $fillable = ['pet_id','user_id','no_pet','reason','id_type','id_no','filename','is_delete'];
}
